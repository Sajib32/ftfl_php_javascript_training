<html>
<style>
    label{
        background-color: red;
        color: #ffffff;
    }
</style>
<?php
$name="";
$email="";
$contact="";
$country="";
$name_error="";
$email_error="";
$contact_error="";
$country_error="";
if(isset($_POST["name"]) && $_POST["name"]!=""){
    $name=$_POST["name"];
    if(preg_match('#[0-9]#',$name))
        $name_error="Name can only contain characters. ";
}
else
    $name_error="Name field is empty.";

if(isset($_POST["email"]) && $_POST["email"]!=""){
    $email=$_POST["email"];
}
else
    $email_error="Email field is empty";

if(isset($_POST["contact"]) && $_POST["contact"]!=""){
    $contact=$_POST["contact"];
    if(!is_numeric($contact))
        $contact_error="Enter only digits ";
}
else
    $contact_error="Contact field is empty ";

if(isset($_POST["country"]) && $_POST["country"]!=""){
    $country=$_POST["country"];
    if(preg_match('#[0-9]#',$country))
        $country_error="Country name can only contain characters. ";
}
else
    $country_error="Country field is empty";

?>

<body>

<form action="reg.php" method="post">
    <table>
        <tr>
            <td> Name</td>
            <td> <input type="text" name="name" value="<?php echo $name; ?>"> </td>
            <td> <label> <?php echo $name_error; ?> </label></td>
        </tr>
        <tr>
            <td> E-mail</td>
            <td> <input type="text" name="email" value="<?php echo $email; ?>"> </td>
            <td> <label> <?php echo $email_error; ?> </label></td>
        </tr>
        <tr>
            <td> Contact</td>
            <td> <input type="text" name="contact" value="<?php echo $contact; ?>"> </td>
            <td> <label> <?php echo $contact_error; ?> </label></td>
        </tr>
        <tr>
            <td> Country</td>
            <td> <input type="text" name="country" value="<?php echo $country; ?>"> </td>
            <td> <label> <?php echo $country_error; ?> </label></td>
        </tr>
        <tr>
            <td><input type="submit" value="Register"></td>
        </tr>
    </table>
</form>

</body>
</html>