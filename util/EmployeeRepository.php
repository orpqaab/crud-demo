<?php
namespace Bevprog\CrudDemo\Util;

class EmployeeRepository {

    const GET_10_EMPLOYEES = "SELECT * FROM employees LIMIT 10";
    const UPLOAD_NEW_EMPLOYEES = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES(:empNo , :birthDate , :firstName , :lastName , :gender , :hireDate)" ;
    
    public function fetch10() {
        $dbh = Database::getConnection();
        $stmt= $dbh->prepare(self::GET_10_EMPLOYEES);
        $stmt->execute();
        return $stmt->fetchAll();        
    }

    public function save($employee) {
        $dbh = Database::getConnection();
        $stmt= $dbh->prepare(self::UPLOAD_NEW_EMPLOYEES);
        $stmt->execute(get_object_vars($employee));
        return $stmt;
    }

}
