<html>
<?php
    $name = ""; 
    if(isset($_GET['userName']) && $_GET["userName"]!="") {
        $name = $_GET["userName"];
        $email = $_GET["emailId"];
        echo "Welcome ",strrev($_GET["userName"]), "<br>";
        echo "Your email Id is:",$_GET["emailId"], "<br>";
    }
    else {
        echo "Please fill in the form";
    }
?>

<body>
 <form action="form_php.php" method="get">
    Name: <input type="text" name="userName" value="<?php echo $name; ?>">
    <br>                                     
    Email Id: <input type="text" name="emailId">
    <br>
    <button type="submit">Submit</button>
 </form>
</body>    
</html>