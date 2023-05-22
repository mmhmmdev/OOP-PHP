<?php
/*

    [Magic Methods]
    - Method With Spacial Name Start With Double Underscore [ __ ]
    
    Construct:
    --- Called when Object is Created
    --- Can be Inherited
    
    Destruct:
    --- Called when Object is Destroyed

    Call:
    --- Called when invoking Function Not Accessible Or Not Found
 */

class Iphone
{

    public $name ;
    public $ram;
    public function __call($name, $arguments)
    {
        echo 'The Method [' . $name . '] Not Found Or Not';
        foreach($arguments as $argument){
            echo '<pre>';
            echo 'The Argument [' . $argument . '] Not Found Or Not';
            echo '</pre>';
            
        }
    }


// public function sayHello($name)
// {
//     echo  $this->name = $name;
// }
// public function __construct()
// {
//     echo 'Object is Created';
// }
}

$phone = new Iphone();
$phone-> sayHello('mohammad','5');
echo '<pre>';
print_r($phone);
echo '</pre>';
?>