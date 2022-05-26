<?php

require_once "methodinterface.php";

class Linux implements StrategyInterface{
    public function OSTitle(){
        echo "This is Linux OS"."</br>";
    }
}

?>