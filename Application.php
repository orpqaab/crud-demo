<?php
namespace Bevprog\CrudDemo;

class Application {
    private $controllers = [
            "create"=>  "Bevprog\CrudDemo\Controllers\CreateController" 
        ];
    public function run($request) {
        $controller=$this->controllers[$request["controller"]];
        $action=$request["action"];
        $controllerInstance= new $controller();
        $controllerInstance->$action();
    }
}