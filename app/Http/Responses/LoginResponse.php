<?php
namespace App\Http\Responses;

use App\Filament\Customer\Resources\MyOrdersResource;
use App\Filament\Resources\OrderResource;
use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
 
class LoginResponse extends \Filament\Http\Responses\Auth\LoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    { 
        dd(Filament::getCurrentPanel()->getId());
        if (Filament::getCurrentPanel()->getId() === 'customer') {
            return redirect()->to(route('home'));
        }
 
        return parent::toResponse($request);
    }
}