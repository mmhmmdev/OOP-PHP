<?php

use Iphone as GlobalIphone;

trait FingerPrint1 {
    public function fingerFeature1(){
        echo 'This Is Fineger Feature1';
    }
    
}

trait FingerPrint2 {
    public function fingerFeature2(){
        echo 'This Is Fineger Feature2';
    }
    
}
trait FingerPrint3 {
    public function fingerFeature3(){
        echo 'This Is Fineger Feature3';
    }
    
}

class Iphone {
    use FingerPrint1;
    use FingerPrint2;
    use FingerPrint3;
    
}


$iphone = new Iphone();
$iphone->fingerFeature1();
echo '<br>';
$iphone->fingerFeature2();
echo '<br>';
$iphone->fingerFeature3();

echo '<pre>'; print_r($iphone); echo'</pre>';

?>