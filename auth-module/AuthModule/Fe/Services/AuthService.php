<?php
namespace App\Login\Fe\Services;

class AuthService
{
    public function authenticate($email, $password)
    {
        $user = User::findByEmail($email);

        if (!$user) {
            return false;
        }

        return password_verify($password, $user['password']);
    }
}

?>