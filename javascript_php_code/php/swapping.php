<?php
$a = 1;
$b = 5;

$tem = $a;
$a = $b;
$b = $tem;
echo $a,"<br>";
echo $b;

// swapping another technique

$a = $a+$b;
$b=$a-$b;
$a = $a-$b;
echo $a;
echo $b;

?>