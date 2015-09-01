<?php
$x = echo "hello";
// echo will not return anything to variable
$x = print "hello";
// print returns value to variable
$x = print "hello","this is a variable";
// print will not print multiple argument or variable but echo can do.
echo "value of".$x."<br>";

$y = 0;
$y -= 4; // $y = $y+4
$y = $y + 4;
echo $y;

$z -= 4; // this will return undefined variable
echo $z;

?>  