<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
function gg ($x){
	if ($x<2) {
		$xx = $x;
	}else{
		$xx = tes($x-2)+3*tes($x-1);
	}
	echo $xx;
}
gg(8);
 ?>
</body>
</html>