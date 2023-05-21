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