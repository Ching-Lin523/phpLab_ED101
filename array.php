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
</style>
</head>
<body>

<h2>使用array()建立一維索引陣列</h2>
<?php 
$arr = array(11,22,33);
for($i=0; $i<3; $i++){
	echo $arr[$i], "<br>";
}
?>    

<h2>使用直接指定的方式建立陣列, 使用count()取得陣列的大小</h2>
<?php 
$ch[0] = 99;
$ch[1] = 88;
$ch[] = 77;  //[2]
$ch[] = 66;
$ch[] = 55;
for($i=0; $i<count($ch); $i++){
	echo $ch[$i], "<br>";
}
?> 

<h2>foreach(....)</h2>
<?php 
$en[] = 66; //[0]
$en[] = 77; //[1]
$en[] = 88; //[2]
$en[1] = 100;//[1]
$en[] = 200;//[3]
$en[8] = 300;//[8]

foreach($en as $i => $data){
	echo "$i : $data", "<br>";
}

echo "<hr>";
foreach($en as $data){
	echo $data, "<br>";
}
?>

<h2>建立關聯性陣列</h2>
<?php 
$zip = array("中壢區"=>"320", "楊梅區"=>"326");
$zip["八德區"] = "333";
$zip[] = "^___________^";
foreach($zip as $key => $data){
	echo "$key : $data", "<br>";
}
?>

<h2>整體陣列的操作</h2>
<?php
$a = array(11,22,33);
$b = $a;
$a[1] = 100;
foreach($b as $i=>$data){
	echo "$i : $data", "<br>";
}
?>

<h2>建立陣列, 使用字面值表示法</h2>
<?php 
$arr = [11,22,33];
print_r($arr);
?>

<h2>陣列有好多好多的函式...可以使用</h2>
<?php
echo "is_array(arr) : ", is_array($arr), "<br>"; //true

echo "in_array(10, arr) : ", in_array(10, $arr), "<br>";//false
echo "array_search(33,arr) : ", array_search(33,$arr), "<br>"; //2
echo "array_search(333,arr) : ", array_search(333,$arr), "<br>"; //false
?>

<h2>shuffle</h2>
<?php 
$arr = array(11,22,33,44,55,66,77,88,99);
shuffle($arr);
print_r($arr);
?>


<h2>shuffle...關聯性陣列</h2>
<?php 
$zip = array("中壢區"=>"320", "楊梅區"=>"326", "八德區" => "333");
echo "shuffle前: "; print_r($zip);echo "<hr>";

shuffle($zip);
echo "shuffle前: "; print_r($zip);
?>


<h2>array_values()</h2>
<?php 
$zip = array("中壢區"=>"320", "楊梅區"=>"326", "八德區" => "333");
$newArr = array_values($zip);//只取出值放入陣列中回傳
foreach($newArr as $i=>$data){
	echo "$i:$data", "<br>";
}
?>

<h2>array_keys()</h2>
<?php 
$zip = array("中壢區"=>"320", "楊梅區"=>"326", "八德區" => "333");
$newArr = array_keys($zip);//只取出key放入陣列中回傳
foreach($newArr as $i=>$data){
	echo "$i:$data", "<br>";
}
?>

<h2>不可以直接輸出陣列變數</h2>
<?php 
$arr = array(1,2,3,4);
echo implode(",",$arr);
?>

<!-- <hr> -->
<?php 
// $QQ[8] = 10;
// $QQ[3] = 20;
// foreach($QQ as $i => $data){
// 	echo "$i : $data", "<br>";
// }
?>
</body>
</html>