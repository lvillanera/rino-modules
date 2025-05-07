<?php
namespace App\Login\Fe\Models;
use \Rino\Database\ClassPdo;

class User
{
    public static function findByEmail($email)
    {
        $db = new ClassPdo();

        $stmt = $db->select("id as identifier, email, status")
                    ->table("users")
                    ->where("email","=",$email)
                    ->where("status","=",1)
                    ->get();

        return $stmt;
    }
}


?>