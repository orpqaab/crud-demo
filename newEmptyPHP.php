<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Fibonacci {
   
    public $nums = [1,1];
    public $k;
   
    public function __construct() {  
       
       
        for($i=2;  $i < 10;$i++){
           
            $this->nums[$i]=$this->nums[$i-1]+$this->nums[$i-2];
        }
       
    }
   
   
}

$a = new Fibonacci();
var_dump($a);
