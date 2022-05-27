<?php

spl_autoload_register(function($class_name){
    include $class_name.".php";
});

class machine{
    public $dbobj;

    public function __construct($param){
       $finddb =  $param;

       switch ($finddb) {
           case 'Mysql':
               $this->MysqlCaller();
               break;
           case 'Oracle':
               $this->dbobj = new Oracle;
               break;
           default:
               echo "You need to define a Database";
               break;
       }
       return $this->dbobj;
    }

    public function MysqlCaller(){
       return new Mysql;
    }

    public function OracleCaller(){
        return new Oracle;
     }

}

$calldb = new machine('Mysql');
$calldb->MysqlCaller()->Connect();
$calldb->MysqlCaller()->Query('Update ');

$calldb1 = new machine('Oracle');
$calldb1->OracleCaller()->Connect();
$calldb1->OracleCaller()->Query('Delete ');
$calldb1->OracleCaller()->Do();