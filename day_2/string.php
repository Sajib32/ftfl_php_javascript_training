<?php
$x = arRay(1,"hello",5);// it works as keywords are case insensitive
// $x = array(1,"hello",4);
$y = array(1,"b,d;djd",4);
$count = strlen($x[1]);
echo $count,"<br>";

$word = str_word_count($x[1]);
echo $word,"<br>";

$ycount = strlen($y[1]);
echo $ycount,"<br>";

$yword = str_word_count($y[1]);
echo $yword;
?>