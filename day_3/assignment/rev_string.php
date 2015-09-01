<?php
$strOrg = "FTFL!!";
$length = strlen($strOrg);
for($i = $length-1; $i >= 0; $i--) {
    $rev = $strOrg[$i];
    //var_dump($rev);
    echo $rev;
}
?>