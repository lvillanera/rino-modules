<?php
namespace App\Login\Fe\Models;

class User
{
    public static function findByEmail($email)
    {
        $db = new \PDO("sqlite:../database.sqlite");
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}


?>