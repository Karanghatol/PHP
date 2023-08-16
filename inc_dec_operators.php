<?php
    // increamental and decreamental operators in php

    
    $a = 5;

    // pre increament
    echo "<br><b>pre increament</b><br>";
    for ($i=0; $i <= $a; ++$i) { // increament $a and return
        echo "pre increament : $i <br>";
    }

    // post increament    
    echo "<br><b>post increament</b><br>";
    for ($j=0; $j <= $a; $j++) { // return $a and jncreament
        echo "post increament : $j <br>";
    }

     // pre decrement
     echo "<br><b>pre decrement</b><br>";
     for ($k=10; $k >= $a; --$k) { // decrement $a and return
         echo "pre decrement : $k <br>";
     }
 
     // post decrement    
     echo "<br><b>post decrement</b><br>";
     for ($l=10; $l >= $a; $l--) { // return $a and dncreament
         echo "post decrement : $l <br>";
     }

   
?>