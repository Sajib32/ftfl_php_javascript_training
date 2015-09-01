<html>
<?php
$sen="";
if(isset($_GET["sentence"]) && $_GET["sentence"] != ""){
    $sen = $_GET["sentence"];
    $words = explode(" ", $sen);
    echo $sen;
    echo "<br>";
    $count = count($words);
    $freq = array();

    for($i = 0;$i<$count;$i++){
        if(array_key_exists($words[$i],$freq)){
            $freq[$words[$i]]++;
        }
        else {
            $freq[$words[$i]] = 1;
        }
    }
    print_r($freq);

}
else {
    echo "Please fill in the blank";
}
?>
    <body>
        <form action="get_sentence.php" method="get">
            Sentence: <input type="text" name="sentence" value="<?php echo $sen; ?>">
            <br>                                     
          
            <button type="submit">Submit</button>
        </form>
    </body>
</html>