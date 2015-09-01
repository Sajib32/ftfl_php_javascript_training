<?php
$stringpointer=fopen("string.txt","r");
$string=fread($stringpointer,filesize("string.txt"));
$word=array();
$wordlength=strlen($string);
$wordstring='';
$k=0;
$p=0;
$m=0;
$j=0;
echo $wordlength."<br>";
for($i=0;$i<$wordlength;$i++){

    if(ord($string[$i])==13)
        continue;
    if($string[$i]==" "||$string[$i]=="\n"){
        $j=$k;
        for($j;$j<$i;$j++){
            $wordstring=$wordstring.$string[$j];
        }
        $k=$j+1;
        $word[$p++]=$wordstring;
        $wordstring='';
    }
    $m=$j;
    $wordstring='';
}
for($m;$m<$wordlength;$m++){
    $wordstring=$wordstring.$string[$m];
}
$word[$p]=$wordstring;
print_r($word);

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

//$freqstring=fopen("string.txt","w");

?>