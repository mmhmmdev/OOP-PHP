<?php

require 'index.php';

class Testing {

    function test(){
        echo 'test ok';
    }
    
}

$test = new Testing();
$test->test();
echo '<pre>';
print_r($test);
echo '</pre>';
?>