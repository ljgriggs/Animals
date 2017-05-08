<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pet
 *
 * @author martinayusuf
 */
class Pet {
    protected $name;
    protected $height;
    protected $weight;
    
    public function speak(){
        echo "\n";
    }
    
    public function printName(){
        echo "Hi! I'm $this->name \n";
    }
    
    function __construct($name) {
        $this->name = $name;
    }

}
