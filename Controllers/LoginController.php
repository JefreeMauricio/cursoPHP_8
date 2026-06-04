<?php

class LoginController
{
    

    public function show()
    {
        return view('partials/login-form');
    }
    public function login()
    {
        if (!Auth::tryLogin($_POST['email'], $_POST['password'])) {
            Auth::ensureSessionStarted();
            $_SESSION['error'] = 'Email o contraseña inválidos.';
            return redirect('login-form');
            exit;
        }

        return redirect('/');
        exit;
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}