<?php

require_once "methodinterface.php";

class Mac implements StrategyInterface{
    public function OSTitle(){
        echo "This is MAC OS"."</br>";
    }
}

?>