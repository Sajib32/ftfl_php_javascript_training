<?php
$string="hi hi hi hi";
$word=explode(" ",$string);
$count=count($word);
$freq=array();
for($i=0;$i<$count;$i++){
    if(array_key_exists($word[$i],$freq))
    {
        $freq[$word[$i]]++;
    }
    else
        $freq[$word[$i]]=1;
}
echo "<br>";
print_r($freq);

$string="hi hi fir hi";
$word=explode(" ",$string);
foreach($word as $key){
    if(array_key_exists($key,$freq))
    {
        $freq[$key]++;
    }
    else
        $freq[$key]=1;
}
echo "<br>";
print_r($freq);
echo "<br>";


$assoc=array("ken"=>"develop","arif"=>"engne");

foreach($assoc as $key=>$value)
echo "$key=>$value","<br>";

$string="hi hi fir hi";
$word=explode(" ",$string);
foreach($word as $key){
    if(array_key_exists($key,$freq))
    {
        $freq[$key]++;
    }
    else
        $freq[$key]=1;
}

foreach($freq as $key=>$value)
    echo "$key=>$value";
?>