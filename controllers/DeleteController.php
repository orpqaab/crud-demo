<?php

namespace Bevprog\CrudDemo\Controllers;

class DeleteController {

    private $employeeRepository;

    function __construct() {
        $this->employeeRepository = new \Bevprog\CrudDemo\Util\EmployeeRepository();
    }

    public function showForm() {
        $template = \Bevprog\CrudDemo\Configuration::VIEWS_DIR . "/show_form.html";
        echo implode("", file($template));
    }

    public function submit() {

        $employee = new \Bevprog\CrudDemo\Models\Employee($_POST);

        $employees = $this->employeeRepository->delete($employee);
        echo $this->getOutput();
    }

    private function getOutput() {
        ob_start();
        include \Bevprog\CrudDemo\Configuration::VIEWS_DIR . "/delete_success.html";
        return ob_get_flush();
    }
}