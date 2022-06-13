
<?php

// spl_autoload_register(function($class_name){
//     include $class_name.".php";
// });

include ("observer.php");
include ("customer.php");

$objserverObj = new Observer();

//$objserverObj->test("Digital World");

$cutomer1 = new Customers("nasim");
$cutomer2 = new Customers("nabil");
$cutomer3 = new Customers("Rukaiya");


$objserverObj->attach($cutomer1);
$objserverObj->attach($cutomer2);
$objserverObj->attach($cutomer3 );


// $objserverObj->newUpdates("New Mobile Available");
// $objserverObj->newUpdates("Awesome Glass Available");

$objserverObj->detuch($cutomer1);
$objserverObj->detuch($cutomer2);
$objserverObj->detuch($cutomer3);


$objserverObj->newUpdates("HP i100 will be arrived soon");


