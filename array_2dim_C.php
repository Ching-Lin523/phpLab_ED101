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
		width:30px;
		height:30px;
	}
</style>
</head>
<body>

<h2>建立2維陣列</h2>
<?php 
$arr = array( array(1,2,3,4) , array(11,12,13,14), array(21,22,23,24));
$arr = [[1,2,3,4], [11,12,13,14], [21,22,23,24]];

foreach($arr as $i => $data){ //目前的$data是一個一維陣列
	echo implode(",",$data), "<br>";
}
?>	

<h2>將2維陣列中的資料放到表格中</h2>
<?php 
echo "<table border='1' cellspacing='0'>\n";
for($i=0; $i<3; $i++){  //i:1
	echo "<tr>";
	for($j=0; $j<4; $j++){ //j:0, 1, 2, 3
		echo "<td>", $arr[$i][$j], "</td>";
	}
	echo "</tr>\n";
}
echo "</table>";
?>  

<h2>將2維陣列中的資料放到表格中(使用foreach)</h2>
<?php 
echo "<table border='1' cellspacing='0'>\n";
foreach( $arr as $i=>$row){  //$row現在是陣列喔~
	echo "<tr>";
	//將$row陣列的內容輸出到td格位中
	foreach($row as $j=>$value){
		echo "<td>", $value, "</td>";
	}
	echo "</tr>\n";
}
echo "</table>";
?>  


<h2>將2維陣列中的資料放到表格中(使用foreach, 省略$i, $j)</h2>
<?php 
echo "<table border='1' cellspacing='0'>\n";
foreach( $arr as $row){  //$row現在是陣列喔~
	echo "<tr>";
	//將$row陣列的內容輸出到td格位中
	foreach($row as $value){
		echo "<td>", $value, "</td>";
	}
	echo "</tr>\n";
}
echo "</table>";
?>     
</body>
</html>