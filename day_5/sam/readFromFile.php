<?php

	$pointer = fopen("sampleRead.txt","r");
	$sentence = fgets($pointer);
	
	$length = strlen($sentence);
	$words = array();
	$word = "";
	
	for($i=0;$i<$length;$i++){
		if($sentence[$i] == " " || $sentence[$i] == "\n"){
			if($i==$length-1){
				$word = $word.$sentence[$i];
			}
			array_push($words,$word);
			$word = "";
		}else{
			$word = $word.$sentence[$i];
		}
	}
	//print_r($words);


	$pointerW = fopen("sampleWrite.txt","w");
	
	foreach($words as $key => $value){
		echo "$key => $value","<br>";
		fwrite($pointerW,"$key => $value");
	}
	
	

 ?>