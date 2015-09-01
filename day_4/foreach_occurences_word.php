<?php
$s = "hello i am u r hello";
$words = explode(" ", $s);
echo $s;
echo "<br>";
$freq = array();

foreach($words as $w){
    if(array_key_exists($w, $freq)) {
        $freq[$w]++;       
    }
    else {
        $freq[$w] = 1;
    }
}
foreach($freq as $f=>$value) {
    echo "$f=>$value","<br>";
}
//print_r($freq);
?>