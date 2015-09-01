<?php
$operand1 = 20;
$operand2 = 3;
$operator = '+';
if(!is_numeric($operand1) || !is_numeric($operand2)){
    echo "please enter valid numeric value.";
}
else{
    if($operator == '+'){
        $add = $operand1+$operand2;
        echo "The addition of number $operand1 and $operand2 is: $add";
    }
    else if($operator == '-'){
        $sub = $operand1-$operand2;
        echo "The subtraction of number $operand1 and $operand2 is: $sub";
    }
    else if($operator == '*'){
        $mul = $operand1*$operand2;
        echo "The multiplication of number $operand1 and $operand2 is: $mul";
    }
    else {
        if($operand2 > 0){
            $div = $operand1/$operand2;
            echo "The division of number $operand1 and $operand2 is: $div";
        }
        else{
            echo "Please enter the operan2 greater than zero";
        }

    }
}
?>