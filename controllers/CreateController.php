<?php

namespace Bevprog\CrudDemo\Controllers;

class CreateController {
    
    public function showForm() {
        $template = \Bevprog\CrudDemo\Configuration::VIEWS_DIR."/show_form.html";
        echo implode("", file($template));
           
    }

}


