<?php
    function myFrequency($words){
        $freq = array();
            foreach($words as $w){
                if(array_key_exists($w, $freq)) {
                    $freq[$w]++;       
                }
                else {
                    $freq[$w] = 1;
                }
            }
        return $freq;
    }

    function myExplode($sentence){
        $strLength = strlen($sentence);
        $words = array();
        $word = "";
        for($i=0;$i<$strLength;$i++) {
            if((ord($sentence[$i]==13) || !((ord($sentence[$i])<=ord('Z')) && (ord($sentence[$i]>='a'))))) {
                continue;
            }
            echo ord($sentence[$i]),"<br>";
            
            if($sentence[$i] == " " || $sentence[$i] == "\n" || $i == $strLength-1 || !($sentence[$i] <='Z' && $sentence[$i] <='a')) {
                if($i==$strLength-1) {
                    $word = $word.$sentence[$i];
                }
                    array_push($words, $word); 
                    $word = "";
                }
                else {
                    $word = $word.$sentence[$i];
                }
            }
        return $words;
    }
?>