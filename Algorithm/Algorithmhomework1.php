<?php
function partition(&$array, $left, $right) {
    $pivot = $array[$right];
    $i = $left -1;
    for ($j = $left; $j < $right; $j++) {
        if (($array[$j] < $pivot)) {
            $i++;
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $temp;
    return ($i + 1);
}

function quicksort(&$array, $left, $right) {
    if ($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        quicksort($array,$left,$pivotIndex -1 );
        quicksort($array,$pivotIndex, $right);
    }
}

//$a = [0, 2, 1, 9, 7];
//$a = [4, 11, 13, 6, 2];
$a = [5, 1, 6, 3, 7, 0, 2, 4, 10];
$n = count($a);

quicksort($a, 0, $n-1);

$sum = $a[$n-1] + $a[$n-2];
echo $sum;
?>
