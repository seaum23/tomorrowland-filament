<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Navigation\MenuItem;
use App\Filament\Pages\Auth\Login;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class CustomerPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('customer')
            ->path('customer')
            ->login(Login::class)
            ->colors([
                'primary' => "#dbf227",
                'black' => [
                    50 => '0, 0, 0',
                    100 => '0, 0, 0',
                    200 => '0, 0, 0',
                    300 => '0, 0, 0',
                    400 => '0, 0, 0',
                    500 => '0, 0, 0',
                    600 => '0, 0, 0',
                    700 => '0, 0, 0',
                    800 => '0, 0, 0',
                    900 => '0, 0, 0',
                    950 => '0, 0, 0',
                ],
            ])
            ->discoverResources(in: app_path('Filament/Customer/Resources'), for: 'App\\Filament\\Customer\\Resources')
            ->discoverPages(in: app_path('Filament/Customer/Pages'), for: 'App\\Filament\\Customer\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Customer/Widgets'), for: 'App\\Filament\\Customer\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->sidebarWidth('12rem')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->authGuard('customer')
            ->plugins([
                \ChrisReedIO\Socialment\SocialmentPlugin::make(),
            ])
            ->viteTheme('resources/css/filament/customer/theme.css')
            ->sidebarCollapsibleOnDesktop()
            ->maxContentWidth(MaxWidth::Full)
            ->userMenuItems([
                MenuItem::make()
                    ->label('Home')
                    ->url(fn (): string => '/')
                    ->icon('heroicon-o-home'),
            ])
            ->darkMode(false)
            ->brandLogo(fn () => view('filament.customer.logo'));
    }
}
