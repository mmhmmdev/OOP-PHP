<?php
/*

    [Magic Methods]
    - Method With Spacial Name Start With Double Underscore [ __ ]
    
    Construct:
    --- Called when Object is Created
    --- Can be Inherited
    
    Destruct:
    --- Called when Object is Destroyed
 */

class Iphone
{

    public $name;
    public $ram;
public function sayHello()
{
}
public function __construct()
{
    echo 'Object is Created';
}
}

$phone = new Iphone();
$phone-> sayHello();
echo '<pre>';
print_r($phone);
echo '</pre>';
?>