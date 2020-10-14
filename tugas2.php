
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

function ss($array){
	$a = count($array);
	$b = 0.0;
	$c = array_sum($array)/$a;

	foreach($array as $i){
		$b += pow(($i-$b), 2);
	}
	return (float)sqrt($b/$a);
}

$array = array(2, 3, 5, 6, 7);
print_r(ss($array));

?>
<br>
 
</body>
</html>