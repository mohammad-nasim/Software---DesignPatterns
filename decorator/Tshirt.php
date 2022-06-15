<?php

include "Sellable.php";

class Tshirt implements Sellable{

    const PRICE = 30;

    public function tshirtPrice(){
        return SELF::PRICE;
    }
}