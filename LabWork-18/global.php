<?php
$x = 10; 

function call() {
    $y = 20;
    echo "the value of y is : " . $y . "\n";
    echo "value of variable x by using globals arr" . $GLOBALS['x'] . "\n";
}

call();
echo "Global variable x outside call function: " . $x . "\n";
?>
