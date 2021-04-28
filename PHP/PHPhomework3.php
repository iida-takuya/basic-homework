<?php
function isPrimeNumber($n) {
    // Because 0 and 1 are not prime numbers
    if ($n === 0 || $n === 1) {
        return false;
    }

    // 2 is a prime number
    if ($n === 2) {
        return true;
    }

    $m = $n/2;
    for ($i = 2; $i <= $m; $i++) {
        // if can devided by another number (not 1 and itself), not prime number
        if ($n%$i === 0) {
            return false;
        }
    }

    return true;
}

// Try to check a number is prime number or not
if (isPrimeNumber(7)) {
    echo "7 is prime number\n";   
} else {
    echo "7 is not prime number\n"; 
}

if (isPrimeNumber(6)) {
    echo "6 is prime number\n";   
} else {
    echo "6 is not prime number\n"; 
}

?>
