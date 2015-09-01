<?php
    include "functions.php";

    $myFile = fopen("sentences.txt", "r");
    $sentence = fread($myFile,filesize("sentences.txt"));
    echo $sentence,"<br>";

    $words = myExplode($sentence);
    print_r($words);
    echo "<br>";

    $freq = myFrequency($words);
    echo "<pre>";
    print_r($freq);
    echo "</pre>";
?>