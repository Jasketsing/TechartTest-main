<?php

namespace App\DB;

class DB 
{
    public static function connToDB()
    {
        $user = 'end';
        $pass = 111;
        $host = HOST;
        $db   = DB;
        $conn = new \PDO("mysql:dbname=$db;host=$host;charset=utf8mb4", $user, $pass);
        return $conn;
    }
}
