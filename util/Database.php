<?php

namespace Bevprog\CrudDemo\Util;

class Database {
    
    public static function getConnection() {
        $dbh= new \PDO('mysql:dbname=employees;host=localhost','root','');
        return $dbh;
    }
}

