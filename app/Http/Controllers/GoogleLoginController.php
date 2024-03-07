<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ChrisReedIO\Socialment\Controllers\SocialmentController;
use ChrisReedIO\Socialment\Exceptions\AbortedLoginException;
use ChrisReedIO\Socialment\Facades\Socialment;
use ChrisReedIO\Socialment\Models\ConnectedAccount;
use ChrisReedIO\Socialment\SocialmentPlugin;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class GoogleLoginController extends SocialmentController
{
    public function callback(string $provider = 'google')
    {
        /** @var SocialmentPlugin $plugin */
        $plugin = Socialment::getFacadeRoot();

        try {
            /** @var \SocialiteProviders\Manager\OAuth2\User */
            $socialUser = Socialite::driver($provider)->user();

            $userModel = config('socialment.models.user');

            $tokenExpiration = match ($provider) {
                'azure' => now()->addSeconds($socialUser->expiresIn),
                default => null,
            };

            // Create a user or log them in...
            /** @var ConnectedAccount */
            $connectedAccount = ConnectedAccount::firstOrNew([
                'provider' => $provider,
                'provider_user_id' => $socialUser->getId(),
            ], [
                'name' => $socialUser->getName(),
                'nickname' => $socialUser->getNickname(),
                'email' => $socialUser->getEmail(),
                'avatar' => $socialUser->getAvatar(),
                'token' => $socialUser->token,
                'refresh_token' => $socialUser->refreshToken,
                'expires_at' => $tokenExpiration,
            ]);

            if (! $connectedAccount->exists) {
                // Check for an existing user with this email
                // Create a new user if one doesn't exist
                $user = $userModel::where('email', $socialUser->getEmail())->first()
                    ?? $userModel::create([
                        'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                        'email' => $socialUser->getEmail(),
                    ]);

                // Associate the user and save this connected account
                $connectedAccount->user()->associate($user)->save();
            } else {
                // Update the connected account with the latest data
                $connectedAccount->update([
                    'name' => $socialUser->getName(),
                    'nickname' => $socialUser->getNickname(),
                    'email' => $socialUser->getEmail(),
                    'avatar' => $socialUser->getAvatar(),
                    'token' => $socialUser->token,
                    'refresh_token' => $socialUser->refreshToken,
                    'expires_at' => $tokenExpiration,
                ]);
            }

            $plugin->executePreLogin($connectedAccount);

            auth()->guard('customer')->login($connectedAccount->user, true);

            $plugin->executePostLogin($connectedAccount);

            // TODO - Move this config paramater to a 'getHomeRoute' method on the plugin
            return redirect()->route(config('socialment.routes.home'));
        } catch (InvalidStateException $e) {
            return redirect()->route($plugin->getLoginRoute());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // TODO - Log this exception
            return redirect()->route($plugin->getLoginRoute());
        } catch (AbortedLoginException $e) {
            Session::flash('socialment.error', $e->getMessage());

            return redirect()->route($plugin->getLoginRoute());
        }
    }
}
