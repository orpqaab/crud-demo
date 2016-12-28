<?php
namespace Bevprog\CrudDemo\Util;

class EmployeeRepository {

    const GET_10_EMPLOYEES = "SELECT * FROM employees LIMIT 10";

    public function fetch10() {
        $dbh = Database::getConnection();
        $stmt= $dbh->prepare(self::GET_10_EMPLOYEES);
        $stmt->execute();
        return $stmt->fetchAll();        
    }
}
