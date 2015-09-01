<?php
$num = [2,5,6,1,0];
$len = count($num);
for ($j=0; $j<$len; $j++){
    for ($i=0; $i<$len-1; $i++){
        if ($num[$i+1] > $num[$i]){
            $t = $num[$i];
            $num[$i] = $num[$i+1];
            $num[$i+1] = $t;
        }
    }
}
for ($i=0; $i<$len; $i++){
    echo $num[$i];
}
?>