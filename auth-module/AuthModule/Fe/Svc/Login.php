<?php

namespace App\Login\Fe\Svc;
use \Rino\Request\Request;

class Main
{
    private $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function login()
    {
        $email = Request::input("user", true);
        $password = Request::input("password", true);

        if ($this->authService->authenticate($email, $password)) {
            sendJson(["message" => "Login exitoso"]);
        } else {
            sendJson(["message" => "Usuario o contraseña incorrectos"]);
        }
    }

    public function logout()
    {
        session_destroy();
        sendJson(["message" => "Sesión cerrada"]);
    }
}
