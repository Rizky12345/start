<?php 
function dd($a){
	$cc = count($a);
	for ($k=0; $k < $cc; $k++) { 
		echo "masukkan elemen ke-",$k+1," : ",$a[$k],"<br>";

	}
}
function ff($a){	
	$cc = count($a);
	for($k=0; $k<$cc; $k++){
		$jumlah = array_sum($a);
		$u = $jumlah/$cc;
	}
	echo "jumlahnya $jumlah<br>";
	echo "rata ratanya $u";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<input type="number" name="dd">
		<input type="number" name="vv">
		<input type="number" name="zz">
		<button name="submit">submit</button>
	</form>
	<?php 
	if (isset($_POST['submit'])) {
		$n = $_POST['dd'];
		$m = $_POST['vv'];
		$b = $_POST['zz'];
		$a = array($n,$m,$b);

		echo "mengjitung nilai rata ratadengan menggunakan larik<br>";
		echo "masukkan jumlah bilangan <br>";
		dd($a);
		ff($a);
	}
	?>
</body>
</html>