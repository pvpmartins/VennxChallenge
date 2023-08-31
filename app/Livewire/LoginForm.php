<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;
    public $remember;

    public function render()
    {
        return view('livewire.login-form');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication was successful
            return redirect()->intended(route('dashboard')); // Redirect to the dashboard or desired page
        } else {
            // Authentication failed
            $this->addError('email', trans('auth.failed'));
        }
    }
}
