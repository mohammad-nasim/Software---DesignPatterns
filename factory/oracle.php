<?php

class Oracle{

    CONST NASIM = "</br>";

    public function Connect(){
        echo self::NASIM."Oracle DB connected".self::NASIM;
    }

    public function Query($param){
        echo $param."Qurey is running now".self::NASIM;
    }

    public function Do(){
        echo "What should I do?";
    }

}