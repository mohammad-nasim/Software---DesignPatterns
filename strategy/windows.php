<?php

require_once "methodinterface.php";

class Windows implements StrategyInterface{
    public function OSTitle(){
        echo "This is Windows OS"."</br>";
    }
}

// $new = new Windows;
// $new->OSTitle();
?>