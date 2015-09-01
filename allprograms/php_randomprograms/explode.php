<?php
$string="hi fie hollo you";
$word=array();
$wordlength=strlen($string);
$wordstring='';
$k=0;
$p=0;
$m=0;
$j=0;
echo $wordlength."<br>";
for($i=0;$i<$wordlength;$i++){
    if($string[$i]==" "){
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
?>