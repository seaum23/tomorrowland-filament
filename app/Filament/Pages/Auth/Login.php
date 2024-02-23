<?php
namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Pages\Auth\Login as FilamentLogin;

class Login extends FilamentLogin
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    protected function getFormActions(): array
    {
        return [];
    }

    public function getHeading(): string | Htmlable
    {
        return "";
    }
}