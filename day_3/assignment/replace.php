<?php

/*global $string;
$string="arif";
global $substring;
$substring="f";
global $replace;
$repstring="mou";
global $str_length;
$str_length=strlen($string);
global $sub_length;
$sub_length=strlen($substring);
global $rep_length;
$rep_length=strlen($repstring);
global $i;
$i=0;*/
function replace()
{
    global $string;
    $string="arif";
    global $substring;
    $substring="ari";
    global $repstring;
    $repstring="l111";
    global $str_length;
    $str_length=strlen($string);
    global $sub_length;
    $sub_length=strlen($substring);
    global $rep_length;
    $rep_length=strlen($repstring);
    global $i;
    $i=0;


    for ($i; $i < $str_length; $i++) {
        $counter = 0;
        for ($j = 0; $j < $sub_length; $j++) {
            if ($string[$i++] == $substring[$j]) {
                $counter++;
                if ($counter == $sub_length) {
                    $i = $i - $sub_length;

                    if ($i == 0 || $i) {
                        return $i;
                    }
                }
            }
        }

        $i = $i - $sub_length;
    }

    echo '"' . $substring . '"' . " does not match.";
    die();
}

$index=replace();
$newstring='';
$j=0;
$k=0;

for($i=0;$i<$str_length-$sub_length+$rep_length;$i++){

    if($i<$index)
        $newstring=$newstring.$string[$i];
    else
        if ($i > $index - 1 && $i < $index + $rep_length)
            $newstring = $newstring . $repstring[$j++];

        else
            $newstring = $newstring . $string[$index+$sub_length+$k++];


}

echo "Replace sting is ".$newstring;
?>