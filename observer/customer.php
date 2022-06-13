<?php
// spl_autoload_register(function($class_name){
//     include $class_name.".php";
// });



class Customers{
    public $customerName;

    public function __construct($name){
        $this->customerName = $name;
    }

    public function sendNewsLetter($ObserverObject){
        echo "Hi ".$this->customerName." here is a ".$ObserverObject->getNewUpdates()." for you in ".$ObserverObject->StoreName()."</br>";
    }

}



