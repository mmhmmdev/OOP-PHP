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
    public function fingerFeature2(){
        echo 'This Is Fineger Feature3';
    }
    
}

class Iphone {
    use FingerPrint1,FingerPrint2,FingerPrint3 {
        FingerPrint2::fingerFeature2 as mohamamdFeat;
        FingerPrint3::fingerFeature2 insteadOf FingerPrint2;
    }
    
}


$iphone = new Iphone();
$iphone->fingerFeature2();
echo '<br>';
$iphone->mohamamdFeat();
// $iphone->fingerFeature2();
// echo '<br>';
// $iphone->fingerFeature3();

echo '<pre>'; print_r($iphone); echo'</pre>';

?>