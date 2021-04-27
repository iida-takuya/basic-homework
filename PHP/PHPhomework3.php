<?php
$target = 10;
$flg = true;
for($i=2;$i<$target;$i++) {
	if($target%$i == 0) {
		$flg = false;
		break;
	}
}

if ($flg) {
	echo $target. " is a prime number.";
} else {
	echo $target. " is not a prime number";
}
?>
