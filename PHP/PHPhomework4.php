<?php
// reuse the function at step 3
function isPrimeNumber($n) {
    // Because 0 and 1 are not prime numbers
    if ($n == 0 || $n == 1) {
        return false;
    }

    // 2 is a prime number
    if ($n == 2) {
        return true;
    }

    $m = $n/2;
    for ($i = 2; $i <= $m; $i++) {
        // if can devided by another number (not 1 and itself), not prime number
        if ($n%$i == 0) {
            return false;
        }
    }

    return true;
}

function getPrimeNumbers($tn) {
    $result = [];
    for ($i = 1; $i <= $tn; $i++) {
        if (isPrimeNumber($i)) {
            array_push($result, $i);
        }
    }

    return $result;
}

// Try to check the function
print_r(getPrimeNumbers(10));

?>
