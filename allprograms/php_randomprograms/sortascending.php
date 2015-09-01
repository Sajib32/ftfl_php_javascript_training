<?php

$number=array(-9,-8,-7,-6,-5,-4,-3,-2,-1,2,0,9,2);
$length=count($number)-1;
for($j=0;$j<$length;$j++) {
    for ($i = 0; $i < $length; $i++) {
        if ($number[$i] > $number[$i + 1]) {
            $x = $number[$i + 1];
            $number[$i + 1] = $number[$i];
            $number[$i] = $x;
        }

    }
}

echo "Array elemens in ascending order are <br>";
for($i=0;$i<count($number);$i++)
    echo $number[$i].' ,';

?>