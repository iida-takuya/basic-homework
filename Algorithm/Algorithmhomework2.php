<?php
function partition(&$array, $left, $right) {
    $pivot = $array[$right];
    $i = $left -1;
    for ($j = $left; $j < $right; $j++) {
        if (($array[$j] < $pivot)){
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

$arr1 = [11, 7, 1];
$arr2 = [4, 6, 2];
$result = [];

$k = 3;

quicksort($arr1, 0, count($arr1) - 1);
quicksort($arr2, 0, count($arr2) - 1);

$firstA = $arr1[0];

for ($i = 0; $i < 3; $i++) {
    $pair = [$firstA, $arr2[$i]];
    array_push($result, $pair);
}

print_r($result);
?>
