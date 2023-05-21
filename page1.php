<?php

include('index.php');

class SonyPhone extends AppleDevice
{

    public $camer = '25.mb';

    
}
$sony = new  sonyPhone();
$sony -> camer;
echo '<pre>';
print_r($sony);
echo '<pre>';
?>