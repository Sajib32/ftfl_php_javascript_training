<?php
$s = "hello i am u r hello";
$words = explode(" ", $s);
echo $s;
echo "<br>";
$count = count($words);
$freq = array();

for($i = 0;$i<$count;$i++){
    if(array_key_exists($words[$i],$freq)){
        $freq[$words[$i]]++;
    }
    else {
        $freq[$words[$i]] = 1;
    }
}
print_r($freq);

?>