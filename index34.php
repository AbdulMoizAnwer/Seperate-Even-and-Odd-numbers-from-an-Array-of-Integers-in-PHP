<?php

// Write a PHP program to separate even and odd numbers of an array of integers.

$num = array(1, 2, 3, 4, 5, 34,53,345,522,234,21);

echo "Even numbers: ";
for ($i = 0; $i < sizeof($num); $i++) {
    if ($num[$i]%2==0) {
        echo $num[$i]. " ";
    }
}
echo "<br>";
echo "Odd numbers: ";
for ($i = 0; $i < sizeof($num); $i++) {
    if ($num[$i]%1==0 && $num[$i]%2!=0) {
        echo $num[$i]." ";
    }
}
?>
