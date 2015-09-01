<html>
<?php
    $name = ""; 
    $data = "";
    $email = "";
    if(isset($_POST['submit'])) 
    {
        if(!empty($_POST["userName"])) 
        {
            $name = $_POST["userName"];
            $data = "success";
            echo "Welcome ",$name;
        }
        else
        {
            $data = "error";
            echo "Please fill in the name";
        }
        if(!empty($_POST["emailId"])) 
        {
            $data = "success";
            echo "Your email id is ", $email;
        }
        else 
        {
            $data = "error";
            echo "Please fill in the email id";
        }
    }

    function success_or_error($data)
    {
        if($data == 'error')
        {
            return $data;
        }
        else
        {
            $data = "success";
            return $data;
        }
    }
?>
<head>
    <style>
        .success {color:green;}
        .error {color: red;}
    </style>    
</head>

<body>
 <form action="form_php.php" method="post">
    <span class="<?php echo $data ?>">Name*:</span>
        <input type="text" name="userName" value="<?php echo $name; ?>">
    <br> 
    <span class="<?php echo $data ?>">Email Id*:</span>   
        <input type="text" name="emailId" value="<?php echo $email; ?>">
    <br>
    
    <button type="submit" name="submit">Submit</button>
 </form>
</body>    
</html>