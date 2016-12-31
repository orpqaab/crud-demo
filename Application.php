<?php

namespace Bevprog\CrudDemo;

class Application {

    private $controllers = [
        "create" => "Bevprog\CrudDemo\Controllers\CreateController",
        "list"   => "Bevprog\CrudDemo\Controllers\ListController",
        "update" => "Bevprog\CrudDemo\Controllers\UpdateController",
        "delete" => "Bevprog\CrudDemo\Controllers\DeleteController"
    ];

    public function run($query_params) {

        $controller = $this->controllers[$query_params["controller"]];
        $action = $query_params["action"];

        $controllerInstance = new $controller();
        $controllerInstance->$action();
    }

}
