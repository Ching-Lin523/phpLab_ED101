<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<style type="text/css">
	h2{
		color:deeppink;
	}
	td{
		width:80px;
		text-align:center;
	}
</style>

</head>
<body>
<h2>ver 1</h2>	
<?php 
for($i=1; $i<=9; $i++){
	echo "1 2 3 4 5 6 7 8 9", "<br>";
}
?>  

<h2>ver 2</h2>	
<?php 
for($i=1; $i<=9; $i++){  //i:1
	//印出一列1..9
	for($j=1; $j<=9; $j++){
		echo $j, " ";
	}
	echo  "<br>";
}
?>   

<h2>ver 3</h2>	
<?php 
echo "<table border='1' cellspacing='0'>";
for($i=1; $i<=9; $i++){  //i:9
	//印出一列1..9
	echo "<tr>";
	for($j=1; $j<=9; $j++){
		echo "<td>", $i*$j, "</td>";
	}
	echo  "</tr>";
}
echo "</table>";
?>  

<h2>ver 4</h2>	
<?php 
echo "<table border='1' cellspacing='0'>";
for($i=1; $i<=9; $i++){  //i:9
	//印出一列1..9
	echo "<tr>";
	for($j=1; $j<=9; $j++){
		echo "<td>$i*$j=", $i*$j, "</td>";
	}
	echo  "</tr>";
}
echo "</table>";
?> 
</body>
</html>