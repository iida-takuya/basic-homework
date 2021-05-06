<?php
$a = array(5, 12, 17, 9, 3);
$b = array(13, 4, 8, 14, 1);
$c = array(9, 5, 3, 7, 21);

// Sum
$sum1 = array_sum($a);
$sum2 = array_sum($b);
$sum3 = array_sum($c);

// Average
$average1 = $sum1 / count($a);
$average2 = $sum2 / count($b);
$average3 = $sum3 / count($c);

// Min
$min1 = min($a);
$min2 = min($b);
$min3 = min($c);

// Max
$max1 = max($a);
$max2 = max($b);
$max3 = max($c);

echo "a:Average=" . $average1 . ", Sum=" . $sum1 . ",  Min=" . $min1 . ",  Max=" . $max1 . "<br/>";
echo "b:Average=" . $average2 . ", Sum=" . $sum2 . ",  Min=" . $min2 . ",  Max=" . $max2 . "<br/>";
echo "c:Average=" . $average3 . ", Sum=" . $sum3 . ",  Min=" . $min3 . ",  Max=" . $max3;
?>


