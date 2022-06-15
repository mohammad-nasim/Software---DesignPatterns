<?php 
//include "Sellable.php"; 

// namespace nasim;

Abstract class Decorator implements Sellable{

    public $obj;

    public function __construct($receviedObj){
        $this->obj = $receviedObj;
    }

    public function tshirtPrice(){
        return $this->obj->tshirtPrice();
    }
}