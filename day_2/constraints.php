<?php
    $x = 0;
    $y = $x++;
    $x = ++$y;
    $z = (++$x)+$y;
    echo $x;
    echo $y;
    echo $z;
?>