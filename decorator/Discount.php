<?php

// include "Decorator.php";



class Discount extends Decorator{

    public $discount = 10;

    public function tshirtPrice(){
        return $this->obj->tshirtPrice() - $this->discount;
    }
}