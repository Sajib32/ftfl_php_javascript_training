<?php  
function scope(){
    //global $x;
    $x = 90;
    echo "Value of x inside scope is",$x,"<br>";
}
function sample(){
    global $x;
    $x = 100;
    echo "Value of x inside sample is",$x,"<br>";
}
scope();
sample();
echo "Value of outside x is: ",$x,"<br>";
echo "Value of outside x is: ",var_dump($x);
?>