<?php

//0～100

$array = array();
array_push($array,2);

for($i = 3;$i <= 100;$i++){
	$k = true;
	for($j = 2;$j < $i;$j++){
		if ($i % $j == 0){
			$k = false;
		}
	}
	if ($k == true){
		array_push($array,$i);
	}
}

foreach($array as $val){
	echo ($val . "\n");
}

?>
