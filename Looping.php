<?php
    // Looping in php

    // for loop
    $a = 5;
    echo "<br>";
    for ($i=0; $i < $a; $i++) { 
        echo $i;
    } // output : 01234

    //while loop
    $b = 1;
    echo "<br>";
    while ($b <= 6) {
        echo $b;
        $b++;
    }

    // do while loop
    $c = 1;
    echo "<br>";
    do {
        echo $c;
        $c++;
    } while ($c <= 10);
?>