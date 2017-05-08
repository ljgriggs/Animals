<?php

include 'Dog.php';
include 'Cat.php';
include 'Fish.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$sally = new Dog( "Sally" , 100, 50);
$sally->printName();
$sally->fetch( "stick" );
$sally->speak();
echo $sally::NumberOfLegs . "\n";

$joe = new Dog("Joe", 80, 40);
$joe->printName();
$joe->fetch( "slipper" );
$joe->speak();


$goldie = new Fish("Goldie");
$goldie->printName();
$goldie->speak();
$goldie->blowBubbles();


$coco = new Cat( "Coco" );
$coco->printName();
$coco->speak();
$coco->purr();
