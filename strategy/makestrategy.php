<?php
require_once "windows.php";
require_once "linux.php"; 
require_once "mac.php";

// spl_autoload_register(function($class_name){
//     include $class_name.".php";
// });

class MakeStrategy{

    private $strategy;

    public function __construct($name_in){
        switch ($name_in) {
            case 'Bill Gates':
                $this->strategy = new Windows;
                break;
            case 'Linus':
                $this->strategy = new Linux;
                break;

            case 'Steave':
                $this->strategy = new Mac;
                break;
            default:
                # code...
                break;
        } 
    }
    
    public function Call(){
        return $this->strategy->OSTitle();
    }
 
 
}

$obj1 = new MakeStrategy('Bill Gates');
$obj1->Call();

$obj2 = new MakeStrategy('Linus');
$obj2->Call();

$obj2 = new MakeStrategy('Steave');
$obj2->Call();

//This is test








// // deleted
// interface StrategyInterface{
//     public function OSTitle();
// }

// class Windows implements StrategyInterface{
//     public function OSTitle(){
//         echo "This is Windows OS"."</br>";
//     }
// }

// class Linux implements StrategyInterface{
//     public function OSTitle(){
//         echo "This is Linux OS";
//     }
// }



