<?php

if (!Auth::tryLogin($_POST['email'], $_POST['password'])) {
    Auth::ensureSessionStarted();
    $_SESSION['error'] = 'Email o contraseña inválidos.';
    header('Location: /login-form');
    exit;
}

header('Location: /');
exit;