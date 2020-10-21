<?php
namespace Controllers;
use Models\User;

class UsersController
{
    public static function create_user ($username, $email, $password) {
        $user = User::create([
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_ARGON2I)
        ]);
    }
}

 ?>
