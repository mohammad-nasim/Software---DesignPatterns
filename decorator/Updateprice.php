<?php

// include "Decorator.php";



class Updateprice extends Decorator{
    public $update = 20;

    public function tshirtPrice(){
        return $this->obj->tshirtPrice() + $this->update;
    }
}