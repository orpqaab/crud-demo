<?php

namespace Bevprog\CrudDemo\Controllers;

class ListController {
    
    public function listItems() {
        $dbh= new \PDO('mysql:dbname=employees;host=localhost','root','');
        $stmt= $dbh->prepare("SELECT * FROM employees limit 10");
        $stmt->execute();
        $result= $stmt->fetchAll();
        
        $employees = $result;
        ob_start();
        include \Bevprog\CrudDemo\Configuration::VIEWS_DIR."/list_items.html";
        $output = ob_get_flush();
        
        echo $output;
        
    }
}
