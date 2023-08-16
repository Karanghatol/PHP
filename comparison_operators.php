<?php
    $n1 = 5;
    $n2 = 3;

    // equal
    if ($n1 == $n2) {
        print("true");
    }else {
        echo ("<br>false");
    }

    // identical
    if ($n1 === $n2) {
        echo ('<br>yes');
    } else {
        echo ('<br>not identical');
    }

    // not equal 
    if ($n1 != $n2) {  // also <> can be used insted of !=
        echo '<br> not equal';
    } else{
        echo '<br> equal';
    }

    // not identical
    if ($n1 !== $n2) {
        echo '<br> not identical';
    } else {
        echo '<br> identical';
    }

    // greater than
    if ($n1 > $n2) {
        echo "<br> n1 is greater";
    }

    // less than
    if ($n1 < $n2) {
        echo "<br> n1 is less";
    }

    // greater than or equal to
    if ($n1 >= $n2) {
        echo "<br> n1 is greater than or equal to n2";
    }

     // less than or equal to
     if ($n1 <= $n2) {
        echo "<br> n1 is less than or equal to n2";
    }

    // spaceship
    if ($n1 <=> $n2) {
        echo "<br> Returns an integer less than, equal to, or greater than zero, depending on if $n1 is less than, equal to, or greater than $n2.";
    }
    
    
    
?>