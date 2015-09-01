<html>
<?php
    $name = "";
    $email = "";
    $contact = "";
    $country = "";
    if(isset($_POST['submit'])) {
        if(isset($_POST["userName"]) && $_POST["userName"] != "" && isset($_POST["emailId"]) && $_POST["emailId"] != "" && isset($_POST["contact"]) && $_POST["contact"] != ""){
            $name = $_POST["userName"];
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            $country = $_POST["country"];
            echo $name;
            echo $email;
            echo $contact;
            echo $country;
        }
        else {
            echo "Please enter a name";
        }
    }
?>

<body>
 <form action="form_errors.php" method="post">
    Name: <input type="text" name="userName" value="<?php echo $name; ?>">
    <br>                                     
    Email Id: <input type="text" name="emailId" value="<?php echo $email; ?>">
    <br>
    Contact No: <input type="text" name="contact" value="<?php echo $contact; ?>">
    <br>                                     
    Country: <input type="text" name="country" value="<?php echo $country; ?>">
    <br>
    <button type="submit" name="submit">Submit</button>
 </form>
</body>    
</html>