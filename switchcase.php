<?php 
$day = 5;

switch ($day) {
    case '1':
        echo "Sunday";
        break;
    case '2':
        echo "Monday";
        break;
    case '3':
        echo "Tuesday";
        break;
    case '4':
        echo "Wednesday";
        break;
    case '5':
        echo "Thusday";
        break;
    case '6':
        echo "Fryday";
        break;
    case '7':
        echo "Saturday";
        break;
    default :
        echo "Invalid! number -> please enter between 1 - 7";
}
?>
