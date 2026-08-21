<?php

//example 1

class Car{
    private $numberPlate;
    function __construct(){
        $this->numberPlate = "G ".mt_rand(1,1000);
    }
    function honk(){
        echo "Pip Pip. The Numberplate is {$this->numberPlate} \n";
    }
}
// main operation in this part
class RentACar{
    static $obj;
    public static function getCar(){ // this function must be static because this function use of one
        // Don't create a new Car if it's already available 
        if(!self::$obj) {
            self::$obj = new Car();// self holo static er jonno this er motoe
        }
        return self::$obj ;
        
        
    }
}
class Passanger1{
    function ride(){
        echo "I am Passanger 1. \n";
        $myCar = RentACar::getCar();
        $myCar -> honk();
        
    }
}
class Passanger2{
    function ride(){
        echo "I am Passanger 2. \n";
        $myCar = RentACar::getCar();
        $myCar->honk ();
    
    }
}
$p1 = new Passanger1();
$p1->ride();
$p2 = new Passanger2();
$p2->ride();

//result same asbe bt jodi main operation |^| ta static na kortam tahole ans same asto na


// ex : 2

class shuvo {
    private static $name;
    public function __construct(){
        if(!self::$name){
            self::$name = $this ;
            echo " shuvo into the function\n";
        }else{
            echo "shuvo already exists\n";
        }
    }
}

$shuvo = new shuvo();
$shuvo = new shuvo();
$shuvo = new shuvo();
$shuvo = new shuvo();
