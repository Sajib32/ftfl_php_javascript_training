<?php
function sample(){
    static $x=0;
    $x = $x + 1;
    echo "Value of x inside sample is",$x,"<br>";
}
sample();
sample();
sample();

echo "Value of x outside sample is",$x,"<br>";
?>