<?php
// Logical operators in php

$m = 4;
$n = 3;

// and operator
if ($m = 4 and $n == 3) {
    echo 'operator "and" : true<br>';
}

// && operator
if ($m == 4 && $n == 3) {
    echo "operator '&&' : true <br>";
}

// or operator
if ($m == 4 or $n == 3) {
    echo "operator 'or' : true <br>";
}

// || operator
if ($m == 4 || $n == 3) {
    echo "operator '||' : true <br>";
}

// xor
if ($m  == 5 xor $n == 3 ) { //one value must be false
    echo "operator 'xor' : true if either m or n is true, but not both<br>";
}

// ! (not)
if ($m != $n) {
    echo "operator '!' : true if not equal";
}
?>