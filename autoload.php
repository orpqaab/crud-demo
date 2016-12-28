<?php

function __autoload($className) {

    $namespace_prefix = "Bevprog\\CrudDemo\\";
    $namespace_folder = substr($className, strlen($namespace_prefix));
    $namespace_elements = explode("\\", $namespace_folder);
    $require_path= "";
    for ($i=0;$i<count ($namespace_elements)-1;$i++){
        $require_path.= strtolower($namespace_elements[$i]) . "/";
    }
    $require_path.= $namespace_elements[count($namespace_elements)-1] . ".php";   
    require $require_path;
}