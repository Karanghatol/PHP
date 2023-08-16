<?php
    // break and continue in php

    // break for loop
    $a = 5;
    echo "<br>  break for : <br>";
    for ($i=0; $i < $a; $i++) { 
        if ($i == 2) {
            break;
        }
        echo $i;
        } // output : 01

        echo "<br> continue for : <br>";
        // continue
        for ($i=0; $i < $a; $i++) { 
            if ($i == 2) {
                continue;
            }
            echo $i;
            } // output : 0134   

    echo "<br> while break : <br>";
    //while loop
    $b = 1;
    while ($b <= 6) {
        if ($b == 3) {
            // continue;
            break;
        }
        echo $b;
        $b++;
    }

    echo "<br>do while break : <br>";
    // do while loop
    $c = 1;
    do {
        echo $c;
        $c++;    
        if ($c == 2) {            
            echo "<br>";
            // continue;
            break;
        }    
    } while ($c <= 10);
?>