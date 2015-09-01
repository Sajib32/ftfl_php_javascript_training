<?php
echo "<h1>Arifur rahaman</h1>";
//global $x;
// $x=10;
function scope(){
    $x=10;
    echo "$x"; //without declare a variable global we can not use inside function.
}
function sample(){
    global $x;
    $x=90;
    echo "$x"; //without declare a variable global we can not use inside function.
}
sample();
scope();
echo "$x";




































$n=3;
$sum=0;
while($n){
        $sum = $sum + pow($n,2);
        $n--;
}
echo "<br>",$sum;

$number=array(-9,-8,-7,-6,-5,-4,-3,-2,-1,0,9,2);
echo count($number);

$length=count($number)-1;

for($j=0;$j<$length;$j++){
    for($i=0;$i<$length;$i++){

        if($number[$i]<$number[$i+1]){
            $x=$number[$i+1];
            $number[$i+1]=$number[$i];
            $number[$i]=$x;
        }

}
    //$length--;
}
echo "<br>".$number[count($number)-1];
echo "Array element <br>";
for($i=0;$i<count($number);$i++)

    echo $number[$i];

echo "<br>String";

$str="arif";
$i=0;
for($i=strlen($str)-1;$i>=0;$i--)
    echo $str[$i];

echo "<br>";

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
echo print_r($freq);
echo "<br>";


?>