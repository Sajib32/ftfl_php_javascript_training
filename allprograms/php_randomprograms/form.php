<html>
<?php
$string="";
if(isset($_POST["string"]) && $_POST["string"]!=""){
    $string=trim($_POST["string"]);
    $freq=array();
    $word=explode(" ",$string);
    foreach($word as $key){
        if(array_key_exists($key,$freq))
        {
            $freq[$key]++;
        }
        else
            $freq[$key]=1;
    }
    echo "<br>";
    print_r($freq);

}

else
echo "Fill the field.";
?>

<body>

<form action="form.php" method="post">
    <table border="3">
        <tr>
            <td> String</td>
            <td> <input type="text" name="string"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form>

</body>
</html>