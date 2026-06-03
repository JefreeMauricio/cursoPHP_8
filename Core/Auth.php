<?php

class Auth 
{
    public static function tryLogin($email, $password)
    {
       $users = User::findBy(['email'=>$email]);

       if (empty($users)) {
           return false;
       }

       $user = $users[0];
       $passwordMatches = password_verify($password, $user->password) || $password === $user->password;

       if ($passwordMatches) {
           static::ensureSessionStarted(); 

           $_SESSION['email'] = $user->email;
           $_SESSION['name'] = $user->name;
           $_SESSION['id'] = $user->id;

           return true;
       }

       return false;
    }

    public static function check()
    {
        static::ensureSessionStarted();

        if(empty($_SESSION['id'])) {
            return false;
        }
        return true;
    }
    public static function ensureSessionStarted()
    {
        if(empty(session_id())) {
            session_start();
        }
        
    }
    public static function logout()
    {
        session_start();
        session_destroy();
       
    }
}