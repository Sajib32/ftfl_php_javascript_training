
<?php

    if($_POST['operand1']=="")
    {
        echo "First field is empty.";
        die();
    }
    else{
        $number1=trim($_POST['operand1']);
        }

    if($_POST['operator']=="")
    {
        echo "Second field is empty.";
        die();
    }
    else
    {
    $operator=trim($_POST['operator']);
    }
    if($_POST['operand2']=="")
    {
        echo "Third field is empty";
        die();
    }
    else
    {
        $number2=trim($_POST['operand2']);
    }

    if(!is_numeric($number1))
    {
        echo "\"$number1\" is not number in first field. Enter valid a number.";
        die();
    }
    if(!is_numeric($number1))
    {
        echo "\"$number2\" is not number in third field. Enter valid a number.";
        die();
    }
    if($operator!="+" &&$operator!="-" &&$operator!="*" &&$operator!="/" &&$operator!="%")
    {
        echo "\"$operator\" is not an operator. Allowed operators(+,-,*,/,%)";
        die();
    }

    if($operator=='+')
    {
        $addition=$number1+$number2;
        echo "Addition of $number1 and $number2 is $addition.";
        die();
    }
    if($operator=='-')
    {
        $subtraction=$number1-$number2;
        echo "Subtraction of $number1 and $number2 is $subtraction.";
        die();
    }
    if($operator=='*')
    {
    $multiplication=$number1*$number2;
    echo "Multiplication of $number1 and $number2 is $multiplication.";
    die();
    }

    if($number2==0)
    {
        echo "Number in third field should be greater than zero.";
        die();
    }
    if($operator=='/')
    {
        $division=$number1/$number2;
        echo "Quotient of $number1 divides by $number2 is $division.";
        die();
    }
    if($operator=='%')
    {
        $reminder=$number1%$number2;
        echo "Reminder of $number1 divides by $number2 is $reminder.";
        die();
    }

?>
