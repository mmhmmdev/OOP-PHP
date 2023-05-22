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

    Get:
    --- Called when Getting a Propety Not Accessible Or Not Found 
    --- Accpet One Parmeter [ $prop ]

    Set:
    --- CAlled when Setting a Value To a Property Not Accessible Or Not Found
    --- Accpt Two Parameters [ $prop, $Value ]

    clone:
    --- Typical Copy Of Object In Php Works By Reference.
    --- Means Both ( Main And Copied ) Object Will Be Interlinked.
    
 */

class Iphone
{

    public $name ;
    private $ram;

    
    
    
    // public function __get($prop)
    // {
    //         echo 'The Property [' . $prop . '] Not Found ';
        
    // }

    
    // public function __call($name, $arguments)
    // {
    //     echo 'The Method [' . $name . '] Not Found Or Not';
    //     foreach($arguments as $argument){
    //         echo '<pre>';
    //         echo 'The Argument [' . $argument . '] Not Found Or Not';
    //         echo '</pre>';
            
    //     }
    // }


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
$phone->ram;
echo '<pre>';
print_r($phone);
echo '</pre>';
?>