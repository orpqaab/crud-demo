<?php

namespace Bevprog\CrudDemo\Models;

class Employee {
    
    private $empNo;
    private $birthDate;
    private $firstName;
    private $lastName;
    private $gender;
    private $hireDate;
    
    public function __construct($empNo, $birthDate, $firstName, $lastName, $gender, $hireDate) {
        $this->empNo = $empNo;
        $this->birthDate = $birthDate;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->hireDate = $hireDate;
    }

    
}

