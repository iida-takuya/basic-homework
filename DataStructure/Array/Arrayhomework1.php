<?php
$a = [5, 12, 17, 9, 3];
$b = [13, 4, 8, 14, 1];
$c = [9, 5, 3, 7, 21];

$min = $a[0];
$max = $a[0];
$sum = 0;
$avg = 0;

$min2 = $b[0];
$max2 = $b[0];
$sum2 = 0;
$avg2 = 0;

$min3 = $c[0];
$max3 = $c[0];
$sum3 = 0;
$avg3 = 0;

$n = count($a);

for ($i = 0; $i < $n; $i++) {
    // add element so tum
    $sum += $a[$i];
    $sum2 += $b[$i];
    $sum3 += $c[$i];

    // check min element
    if ($min > $a[$i]) {
        $min = $a[$i];
    }

    if ($min2 > $b[$i]) {
        $min2 = $b[$i];
    }

    if ($min3 > $c[$i]) {
        $min3 = $c[$i];
    }

    // check max element
    if ($max < $a[$i]) {
        $max = $a[$i];
    }

    if ($max2 < $b[$i]) {
        $max2 = $b[$i];
    }

    if ($max3 < $c[$i]) {
        $max3 = $c[$i];
    }
}

$avg = $sum / $n;
$avg2 = $sum2 / $n;
$avg3 = $sum3 / $n;

echo $n;
echo "a:" . $avg . "," . $sum . "," . $min . "," . $max . "<br/>";
echo "b:" . $avg2 . "," . $sum2 . "," . $min2 . "," . $max2 . "<br/>";
echo "c:" . $avg3 . "," . $sum3 . "," . $min3 . "," . $max3;
?>
