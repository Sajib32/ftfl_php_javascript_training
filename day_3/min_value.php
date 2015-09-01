<?php
$num = [9,0,1,4,5,-1,10];

$length = count($num);

// echo $length;
$check = $num[0];
for($i = 0; $i < $length; $i++) {
    if($check > $num[$i]){
        $check = $num[$i];
    }
}
echo "Minimum number is: $check";
?>