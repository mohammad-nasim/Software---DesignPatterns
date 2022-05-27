<?php

class Mysql{

    CONST NASIM = "</br>";

    public function Connect(){
        echo "My Sql DB connected".self::NASIM;
    }

    public function Query($param){
        echo $param."Qurey is running now".self::NASIM;
    }

}