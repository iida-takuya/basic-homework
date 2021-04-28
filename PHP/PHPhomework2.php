<?php
function factorialOfNumber ($n) {
    if ($n > 0) {
        return $n *= factorialOfNumber ($n - 1);
    }
    return 1;
}

echo 'The sum of odd numbers from 0 to 50 = ' . $sum . '<br/>';
?>
