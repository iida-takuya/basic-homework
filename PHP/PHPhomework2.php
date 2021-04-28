<?php
function factorialOfNumber ($n) {
    if ($n > 0) {
        return $n *= factorialOfNumber ($n - 1);
    }
    return 1;
}

echo '10! = ' . factorialOfNumber (10) . '<br/>';
?>
