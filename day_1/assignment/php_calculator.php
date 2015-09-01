<html>
    <head>
        <title>Simple Calculator</title>
    </head>
<body>
    <form method='post' action='php_calculator.php'>
        Enter First Number: <input type='text' name='num_1'><br>
        Enter Second Number: <input type='text' name='num_2'><br>
        Enter Operator: <input type='text' name='operator'><br>
        <input type='submit' name='submit' value='Calculate Now'>
    </form>
<?php
if(isset($_POST['submit'])){
    $num_1 = $_POST['num_1'];
    $num_2 = $_POST['num_2'];
    $op = $_POST['operator'];
    
    if(!is_numeric($num_1) || !is_numeric($num_2)){
    
        echo "<b>Please enter numeric value and appropriate operators(+,-,*,/).</b>";
    } 
    else {
         if($op=="+"){
             echo "<b>Answer:Addition of ({$num_1} and {$num_2}) is:</b><br>";
                echo $num_1+$num_2;
            }

            else if($op=="-"){
                echo "<b>Answer:Subtraction of {$num_1} and {$num_2} is:</b>";
                echo $num_1-$num_2;   
            }

            else if($op=="*"){
                echo "<b>Answer:Multiplication of {$num_1} and {$num_2} is:</b><br>";
                echo $num_1*$num_2;
            }

            else if($op=="/"){
                if($num_2 > 0){
                    echo "<b>Answer:Division of {$num_1} and {$num_2} is:</b><br>";
                    echo $num_1/$num_2;
                }
                else{
                    echo "<b>Please enter second value greater than zero.</b>";
                }

            }
            else{
                echo "<b>Please enter the operators(* or + or / or -).</b>";
            }    
    }
}
?>

</body>
</html>