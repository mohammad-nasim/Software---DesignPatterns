<?php

spl_autoload_register(function($class_name){
    include $class_name.".php";
});


$RegularPrice = new Tshirt();
echo "Regular Price of a Tshirt is - ".$RegularPrice->tshirtPrice()." Pound <br/>";

$UpdatedPrice = new Updateprice($RegularPrice);
echo "Updated Price of the Tshirt is - ".$UpdatedPrice->tshirtPrice()." Pound <br/>";

$DiscountedPrice = new Discount($RegularPrice);
echo "Discounted Price of the Tshirt is - ".$DiscountedPrice->tshirtPrice()." Pound <br/>";