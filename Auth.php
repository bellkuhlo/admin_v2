<?php
// cms/app/core/Auth.php

class Auth
{
    public static function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }

    public static function requireLogin()
    {
        if (!self::isLoggedIn()) {
            header('Location: /admin/login');
            exit;
        }
    }

    public static function logIn($user_id)
    {
        $_SESSION['user_id'] = $user_id;
    }

    public static function logOut()
    {
        unset($_SESSION['user_id']);
    }
}
