<?php
/*
        Classe & Object
        - Class in a Blueprint That Can Create Object From
        - Objcet is A Member in The Main Application
        - Class Has Properties & Methods
        - Variable Inside Class = [ Property ]
        - Variable Outside Class = [ Variable ]
        - Function Inside Class = [ Method ]
        - Function Outside Class = [ Function ]
        
        - [ class ] = Class Keyword
        - [ new ] = New Object
        - [ Public, Private, Protected ] = Visibility Markers 
        - [ -> ] = Object Operator
        - [ $this ] =  Pseudo Variable [ Refer To Object properties]
        - [ :: ] =  Scope Resolution Operator [ Pamayim Nekudotayim ] = Doble   
            colon
        
        self vs $this

        self:
        - Refer to current Class
        - Access Static Members
        - Not Use ( $ ) Because its Not Represnt Variable But Present Class 
            Contruction
        
        $this:
        - Refer to Current Object  
        - Access Non Static Members
        - Use ( $ ) Because It Represent a Variable

        
        Apple 
        - Apple Store                = Application
        - Iphone & labtop            = Object
        - Apple Blueprint Design     = Class

        Web Application
        - Web Application            = Application
        - The Members                = Object
        - Code To Add New Member     = Class
        
        Blog System
        - Blog System                = Application
        - Blog                       = Object
        - Code To Add New Post & News & Article = Class
        
        [ extends ] نظام توريث 
        -  تسطيع استخدم جميع بربورتي الموجودة داخل ال كلاس المشار اليه 
        - ويمكنك من اضافة بربرتي جديدة حسب احتياجك 

        [ final ] لمنع التوريث 
        - تستطيع منع توريث لكلاس
        - وتستطيع منع توريث المثود

        [ Class Abstraction ]
        - Cannot Be Intantiaed [ Cannot Create Object From ]
        - Made For other Classes To Inherit prop & Methode From
        - Can have Methods & Properties
        - Can Have Abtracted Method And Non Abstracted Methods
        - Abstract Methods [ Contains No Body Code ]


        [ Visibilty Markers ]
        * [public]
        - if can be called in any scope. This means that a public property of an object can be both  
        - retrieved and moblified from anywhere in a program -- in the class, a subclass or from outside 
        - of the class, for example. This level is he default behavior when visibility is not declared because
        - of backward-comatibility concerns with PHP4, which did not have visibility.
        * [ Protected]
        -  Protected proprties and methods can be accessed from inside the class they are declared, or in 
        -  any class that extends them. they cant be accessed from outside the class or subclass
        * [ Private ]
        - a Private property or method can t be accessedby a subclass of the class it is defind in. if you 
        - have a class with a protected property and a private property and then extend that class in the 
        - subclass, you can access the property, but not the private property.  
 */


class AppleDevice
{
//Properties
    public $name;   
    public $ram = '2GB';
    public $inch = '5.5';
    public $space = '50GB';
    public $color =  'Red';
    // private $lock;

//Constants
    
// const OWNERNAME = '3';
//Methods

// public function getSpecification()
// {
//     //     echo 'This Phone Ram is:' . $this->ram .'<br>';
//     // }
//     // public function setOwnerName($owner)
//     // {
//     //     if(strlen($owner) < self::OWNERNAME){
//     //         echo 'Owner Name Cant Be Less Than '.self::OWNERNAME.' Chars';
//     //     } else {   
//     //         echo 'You Name Has Been Set';
//     //     }
// }
    
    public function changeSpec($ra, $in)
    {
        $this->ram  = $ra;
        $this->inch = $in;
        
    }

    // public function changeLock($lo)
    // {
    //     $this->lock  = sha1($lo);
        
    // }

    final  public function sayHello($name)
    {
        $this->name = $name;
        echo 'Welcome To ' . $name;
    }
}


    $iphone6Plus = new  AppleDevice();
    $iphone6Plus -> changeSpec("2G","5.5");
    $iphone6Plus -> sayHello('iphone');

    // $iphone6Plus -> changeLock("mohammad@gmail.com");
    // $iphone6Plus->ram = "3GB";
    // $iphone6Plus->inch = "5.5";
    // $iphone6Plus->space = "32GB";
    // $iphone6Plus->color = "Red";
    // $iphone6Plus->OwnerName = "Mohammad";
    // $iphone6Plus->setOwnerName('mohammad');
    // echo $iphone6Plus->lock;
    echo '<pre>';
    print_r($iphone6Plus);
    echo '<pre>';

    // $iphone7Plus = new  appleDevice();
    // $iphone7Plus->ram = "5GB";
    // $iphone7Plus->inch = "8.5";
    // $iphone7Plus->space = "64GB";
    // $iphone7Plus->color = "black";
    // echo '<pre>';
    // var_dump($iphone7Plus);
    // echo '<pre>';
    
    // $iphone = new  appleDevice();
    // echo '<pre>';
    // var_dump($iphone);
    // echo '<pre>';

    
?>