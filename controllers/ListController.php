<?php

namespace Bevprog\CrudDemo\Controllers;

class ListController {
    
    public function listItems() {
        
        $template = \Bevprog\CrudDemo\Configuration::VIEWS_DIR."/list_items.html";
        echo implode("",file($template));
    }
}
