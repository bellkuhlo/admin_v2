<?php
// cms/app/controllers/AdminController.php

namespace app\controllers;

use app\core\Auth;
use app\models\User;

class AdminController {
    public function index() {
        Auth::requireLogin();
        // Logik für das Admin-Dashboard
        require_once APP_PATH . '/views/admin/dashboard.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = User::findByUsername($username);

            if ($user && password_verify($password, $user->password)) {
                Auth::logIn($user->id);
                header('Location: /admin/dashboard');
                exit;
            } else {
                // Fehlermeldung anzeigen
                echo "Invalid username or password.";
            }
        } else {
            require_once APP_PATH . '/views/admin/login.php';
        }
    }

    // Weitere Methoden für den Admin-Bereich (z.B. Benutzer verwalten, Seiten bearbeiten usw.)
}
