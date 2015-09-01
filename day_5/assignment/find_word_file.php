<?php
$myFile = fopen("sentences.txt", "r");
$sentence = fgets($myFile);
echo $sentence;

$words = array();
$word = "";
$strLength = strlen($sentence);
for($i=0;$i<$strLength;$i++) {
    if(ord($sentence[$i]==13)){
        continue;
    }
    if($sentence[$i] == " " || $sentence[$i] == "\n" || $i == $strLength-1) {
        if($i == $strLength-1) {
            $word = $word.$sentence[$i];
        }
        array_push($words, $word); 
        $word = "";
    }
    else {
        $word = $word.$sentence[$i];
    }
}
print_r($words);


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