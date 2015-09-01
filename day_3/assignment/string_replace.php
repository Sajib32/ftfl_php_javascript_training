<?php
$strOrig = "FTFL!!";
$len = strlen($strOrig);
$strFind = "FT";
$find = strlen($strFind);
for($i = 0; $i < $len; $i++) {
    for($j = 0; $j < $find; $j++){
        if($strFind[$j] == $strOrig[$i]){
             echo $strFind[$j];     
        }
       
    }
   
}
?>