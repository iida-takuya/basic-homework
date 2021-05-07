<?php
// Define 2-dimentional array
$a = [[5, 12, 17, 9, 13], [13, 4, 8, 14, 1], [9, 5, 3, 17, 21]];
// Define $min, $max is first element of the array
$min = $a[0][0];
$max = $a[0][0];
$sum = 0;
$avg = 0;
$n = count($a[0]) + count($a[1]) + count($a[2]);

// Loop through 2-dimention array
foreach ($a as $row) {
    // Loop through each row
    foreach ($row as $elm) {
        // add element so tum
        $sum += $elm;

        // check min element
        if ($min > $elm) {
            $min = $elm;
        }

        // check max element
        if ($max < $elm) {
            $max = $elm;
        }
    }
}

$avg = $sum/$n;

echo (int)$avg . "," . $sum . "," . $min . "," . $max;
?>
