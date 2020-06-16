<!DOCTYPE html>
<html lang="zh-hant">
<head>
	<meta charset="utf-8">
	<title></title>

</head>

<body>
	<?php
		$total = 0;
		for($i = 0; $i <= 10; $i++){
			$price = rand(0,10);
			echo $price * 100, ",";
			$total += $price * 100;
		};
		echo "<br>";
		echo "總金額:", $total;
	?>

</body>
</html>
