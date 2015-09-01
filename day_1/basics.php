<html>
<?php
    echo "<h1>Hello FTFLs!!</h1>"; 
    $x=10;
    
scope($x);
$x=$x+10;
function scope($x){
    //$GLOBAL $x;
    $x=$x+1;
    echo "My variables in function are $x";
}
        
echo "My variables in function are $x";

    ?>       
</html>
    