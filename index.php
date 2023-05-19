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
        
 */


class appleDevice
{
    //Properties
    
    public $ram = '2GB';
    public $inch = '5.5';
    public $space = '50GB';
    public $color =  'Red';
    
    //Methods

    public function doubleHomePressed()
    {
        echo 'You have Pressed The Home Button Twice';
    }
}

    $iphone6Plus = new  appleDevice();
    $iphone6Plus->ram = "3GB";
    $iphone6Plus->inch = "5.5";
    $iphone6Plus->space = "32GB";
    $iphone6Plus->color = "Red";
    $iphone6Plus->doubleHomePressed();
    echo '<per>';
    var_dump($iphone6Plus);
    echo '<per>';

    $iphone7Plus = new  appleDevice();
    $iphone7Plus->ram = "5GB";
    $iphone7Plus->inch = "8.5";
    $iphone7Plus->space = "64GB";
    $iphone7Plus->color = "black";
    echo '<per>';
    var_dump($iphone7Plus);
    echo '<per>';
    
    $iphone = new  appleDevice();
    echo '<per>';
    var_dump($iphone);
    echo '<per>';
?>