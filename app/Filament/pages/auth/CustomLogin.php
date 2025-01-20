<?php
namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login;
use Filament\Forms\Components\TextInput;
use App\Filament\Pages\Auth\Component;  
use Filament\Forms\Components;  
use Filament\Forms\Form; 
use Illuminate\Validation\ValidationException;



class CustomLogin extends Login
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getLoginFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    } 


    protected function getLoginFormComponent(): TextInput
    {
        return TextInput::make('login')
            ->label(__('Usename/ Email'))
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        $login_type = filter_var($data['login'], filter:FILTER_VALIDATE_EMAIL ) ? 'email'  : 'name';

        return [
            $login_type => $data['login'],
            'password' => $data['password'],
        ];
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.login' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }
}