<?php
/*
[ Class Abstraction ]
- Cannot Be Intantiaed [ Cannot Create Object From ]
- Made For other Classes To Inherit prop & Methode From
- Can have Methods & Properties
- Can Have Abtracted Method And Non Abstracted Methods
- Abstract Methods [ Contains No Body Code ]

* Rules To Go On
* Force Developers To Follow Your methods

    [ Abstract ]
    *الملخص هو عبار عن رسم معايير للمطور للمشي عليها 
    -وحتا اذا تم حذف هذه المعايير تبقا الامور كما هيا بعد التطبيق
*/

abstract class MakeDevice
{
    abstract public function textPrformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($n);
}

class PhoneDevice extends MakeDevice
{
    public $name;
    public function textPrformance()
    {
    echo "is Good";    
    }
    public function verifyOwner()
    {
    echo "is Good";    
    }
    public function sayWelcome($n)
    {
        
        echo " You Welcome " . $this->name = $n ;    
    }
    
}

$iphone = new PhoneDevice();
$iphone->textPrformance();
echo'<br>',
$iphone->verifyOwner();
echo'<br>',
$iphone->sayWelcome('Mohammad');

?>