<?php

include('index.php');

class SonyPhone extends AppleDevice
{

    public $camera = '25.mb';
    // public $price;

}
$sony = new  sonyPhone();
$sony -> camera;
$sony ->price = '$500';
$sony -> sayHello('Sony');
echo '<pre>';
print_r($sony);
echo '<pre>';
?>