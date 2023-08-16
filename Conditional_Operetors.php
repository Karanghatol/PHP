<?php
    // conditional operetors in php

    // if
    $x = true;
    if($x){
        echo "true";
    }

    // if else
    $a = 18;
    if ($a > 18) {
        echo "Adult";
    }else{
        echo "Under 18";
    }

    // if, elseif, else
    $b = 23;
    if ($b > 23) {
        echo "ready for job";
    } elseif($b < 24 || $b == 18) {
        echo "graduation";
    } else{
        echo "keep studing";
    }
    
?>