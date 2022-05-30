<?php

/**
 * Singleton classes
 */
class Singleton {
    private static $obj;

    private function __construct(){
        //echo "Database connected";
    }

    public static function Connect(){

        if(!isset(self::$obj)){
            self::$obj = new Singleton;
            echo "Newly created instance <br/>";
        }
        else{
            echo "Old one <br/>";
            
        }

        return self::$obj;
    }
  }


  $getData = Singleton::Connect();
  $getData1 = Singleton::Connect();
  $getData3 = Singleton::Connect();