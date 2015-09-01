<?php

    include "functions.php";

    $sentence = "Hi hello\nhello mr";
    echo $sentence,"<br>";

    $words = myExplode($sentence);
    //print_r($words);
    echo "<br>";
    foreach($words as $w=>$value)
    {
        echo $w,"=>",$value, "<br>";
    }
?>