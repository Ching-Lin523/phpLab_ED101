<!DOCTYPE html>
<html lang="zh-hant">
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<?php

?>
<body>
	<?php
	echo "橘子等級:", $_GET["level"], "<br>";
    echo "公斤數:", $_GET["weight"], "<br>";
	
	if($_GET["level"] == 1 & $_GET["weight"] > 100){
		echo "小計:", $_GET["weight"] * 20, "元";
	}else if($_GET["level"] == 1 & $_GET["weight"] > 40){
		echo "小計:", $_GET["weight"] * 25, "元";
	}else if($_GET["level"] == 1 & $_GET["weight"] <= 40){
		echo "小計:", $_GET["weight"] * 30, "元";
	}

	if($_GET["level"] == 2 & $_GET["weight"] > 100){
		echo "小計:", $_GET["weight"] * 15, "元";
	}else if($_GET["level"] == 2 & $_GET["weight"] > 40){
		echo "小計:", $_GET["weight"] * 20, "元";
	}else if($_GET["level"] == 2 & $_GET["weight"] <= 40){
		echo "小計:", $_GET["weight"] * 25, "元";
	}

	if($_GET["level"] == 3 & $_GET["weight"] > 100){
		echo "小計:", $_GET["weight"] * 10, "元";
	}else if($_GET["level"] == 3 & $_GET["weight"] > 40){
		echo "小計:", $_GET["weight"] * 15, "元";
	}else if($_GET["level"] == 3 & $_GET["weight"] <= 40){
		echo "小計:", $_GET["weight"] * 20, "元";
	}
	?> 
</body>
</html>