<?php

namespace Bevprog\CrudDemo\Controllers;

class ListController {
    private $employeeRepository;
    
    function __construct() {
        $this->employeeRepository = new \Bevprog\CrudDemo\Util\EmployeeRepository();
    }

    
    public function listItems() {
        $employees = $this->employeeRepository->fetch10();
        echo $this->getOutput($employees);
    }
    
    private function getOutput($employees) {
        ob_start();
        include \Bevprog\CrudDemo\Configuration::VIEWS_DIR."/list_items.html";
        return ob_get_flush();        
    }
}
