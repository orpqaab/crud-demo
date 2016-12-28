<?php

namespace Bevprog\CrudDemo\Models;

class Employee {
    
    public $empNo;
    public $birthDate;
    public $firstName;
    public $lastName;
    public $gender;
    public $hireDate;
    
    public function __construct($data) {
        extract($data);
        $this->empNo = $empNo;
        $this->birthDate = $birthDate;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->hireDate = $hireDate;
    }

    
}

