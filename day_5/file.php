<?php

$myPointer = fopen("sentence.txt", "r");

//fgets($myPointer);
//$string = fgets($myPointer);
//echo $string[0]." ".$string[1];
//fgets($myPointer);
//echo fgets($myPointer);
//echo fgets($myPointer);
//echo fread($myPointer,filesize("sentence.txt"));

//fwrite($myPointer, "I am writing in the file1.\n");
//fwrite($myPointer, "I am writing in the file2.\n");
//fclose($myPointer);

//$myPointer = fopen("sentence.txt","a");
//fgets($myPointer);
//fwrite($myPointer, "I am writing in the file3.\n");
//fwrite($myPointer, "I am writing in the file4.\n");
//fclose($myPointer);

//$myPointer = fopen("sentence.txt","r");
//fgets($myPointer);
//echo fgets($myPointer);
//echo fgets($myPointer);
    while(!feof($myPointer)){
        echo fgetc($myPointer);
    }
fclose($myPointer);
?>