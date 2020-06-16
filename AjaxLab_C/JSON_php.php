<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<h2>indexed array : json_encode()</h2>
<?php 
$arr = array(11, 22, 33);
echo json_encode($arr);  //[11, 22, 33]
?>    

<h2>associative array : json_encode()</h2>
<?php 
$arr = array("empNo"=>"7002", "empName"=>"Alice", "salary"=>36000);
echo json_encode($arr); //{"empNo":"7002","empName":"Alice","salary":36000}
?>  

<h2> json_decode() 成 array</h2>
<?php 
$str = '[11, 22, 33]';
$arr2 = json_decode($str);
echo $arr2[0], "<br>";
echo $arr2[1], "<br>";
?> 


<h2> json_decode() 成 物件</h2>
<?php 
$str = '{"empNo":"7002","empName":"Alice","salary":36000}';
$obj = json_decode($str);
echo $obj->empNo, "<br>";
echo $obj->empName, "<br>";
?> 
</body>
</html>