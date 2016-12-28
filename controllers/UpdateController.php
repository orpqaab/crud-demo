<?php

namespace Bevprog\CrudDemo\Controllers;

class UpdateController {
    
    public function update() {
        
        $template= \Bevprog\CrudDemo\Configuration::VIEWS_DIR . "/update.html";
        echo implode("", file($template));
    }
    
}

