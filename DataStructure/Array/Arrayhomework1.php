<?php
$a = [5, 12, 17, 9, 3];
//$a = [13, 4, 8, 14, 1];
//$a = [9, 5, 3, 7, 21];

$min = $a[0];
$max = $a[0];
$sum = 0;
$avg = 0;

$n = count($a);

for ($i = 0; $i < $n; $i++) {
    // add element so tum
    $sum += $a[$i];

    // check min element
    if ($min > $a[$i]) {
        $min = $a[$i];
    }

    // check max element
    if ($max < $a[$i]) {
        $max = $a[$i];
    }
}

$avg = $sum / $n;

echo "a:" . $avg . "," . $sum . "," . $min . "," . $max . "<br/>";
?>
