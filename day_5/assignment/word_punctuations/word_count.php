<?php
    include "functions.php";

    $myFile = fopen("sentence.txt", "r");
    $sentence = fread($myFile,filesize("sentence.txt"));
    echo $sentence,"</br>";

    $words = myExplode($sentence);
    $freq = myFrequency($words);

    print_r($freq);
?>