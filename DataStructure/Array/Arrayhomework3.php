<?php
$a = array(5, 12, 17, 9, 13);
$b = array(13, 4, 8, 14, 1);
$c = array(9, 5, 3, 17, 21);
$arrays = [$a, $b, $c];

// Sum
$sum = array_sum($a) + array_sum($b) + array_sum($c);

// Average
$average = $sum / (count($a) + count($b) + count($c));

// Min
$min = array_map(function($row) {
    return min($row);
}, $arrays);

// Max
$max = array_map(function($row) {
    return max($row);
}, $arrays);

echo "Average = " . (int)$average . "<br/>";
echo "Sum = " . $sum . "<br/>";
echo "Min = " . min($min) . "<br/>";
echo "Max = " . max($max);
?>
