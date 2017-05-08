<?php
include 'Pet.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dog
 *
 * @author martinayusuf
 */
class Dog extends Pet{
    const NumberOfLegs = 4;
    
    function __construct($name, $height, $weight) {
        parent::__construct($name);
        $this->height = $height;
        $this->weight = $weight;
    }
    
    public function speak (){
        echo "woof woof! \n";
    }
    
    public function fetch($item){
        echo "Here is your $item ! \n";
    }

}
