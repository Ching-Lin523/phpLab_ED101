<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
</head>
<body>
<?php
function sum($a, $b){
	$total = $a + $b;
	return $total;
}
echo "10+20 = ", sum(10, 20), "<br>";
//-----------------------------------------函式不可重複定義
function sumMany($array){ //參數可以是陣列型的資料
	$total = 0;
	if( is_array($array) == true){
		foreach($array as $i=>$data){
			$total += $data;
		}
	}else{
		return false;
	}

	return $total;
}


echo "10+20+30 = ", sumMany([10, 20,30]), "<br>";
echo "10+20+30+40+50 = ", sumMany([10, 20, 30, 40, 50]), "<br>";


echo "10 = ", sumMany(10), "<br>";
?>	 

<h2>call by value, call by reference</h2>
<?php
function sumByRefByValue(&$a, $b){
	$total = $a + $b;
	$a = 100 + $a;
	$b = 100 + $b;
	return $total;
}

$x = 10;
$y = 20;
echo "$x+$y = ", sumByRefByValue($x, $y), "<br>"; 
echo "x : $x <br>";
echo "y : $y <br>";
?> 

<h2>by value example</h2>
<?php 
function adjustSalary($dataArr,$amt){
     for($i=0;$i<count($dataArr);$i++){
     	$dataArr[$i] += $amt;
     }
     return $dataArr;
}

$salarys = [10000, 20000, 30000];

$salarys = adjustSalary($salarys, 1000);

for($i=0;$i<count($salarys);$i++){
     	echo $salarys[$i], "<br>";
}
?>  

<h2>by reference example</h2>
<?php 
function adjustSalaryByRef(&$dataArr,$amt){
	$total = 0;
     for($i=0;$i<count($dataArr);$i++){
     	$dataArr[$i] += $amt;
     	$total += $dataArr[$i];
     }
     return $total;
}

$salarys = [10000, 20000, 30000];

$salaryTotal = adjustSalaryByRef($salarys, 1000);
for($i=0;$i<count($salarys);$i++){
     	echo $salarys[$i], "<br>";
}

echo "薪資總額 : $salaryTotal<br>";
?>


<h2>default value</h2>
<?php 
function printMark($classId="前端工程師養成班"){
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******$classId<br>";
}

printMark("ED101");
printMark();

?>

<h2>local , global</h2>
<?php 
$amount = 0; //全域變數
function getAmount(){
	global $amount; //宣稱所使用的$amount是全域變數
	//connect DB server
	//send sql command
	//......
	$amount = 100000; //
}

function showAmount(){
	global $amount;
	echo "<h2 style='color:deeppink'>總額 : $amount</h2>";
}

getAmount();
showAmount();
?>

<h2>local , global...2</h2>
<?php 
$amount2 = 10; //全域變數
$GLOBALS["amount2"] = 700000000;
echo "全域變數amount2 : " , $GLOBALS["amount2"], "<br>";

function getAmount2(){
	//宣稱所使用的$amount是全域變數
	//connect DB server
	//send sql command
	//......
	$GLOBALS["amount2"] = 100000; //
}

function showAmount2(){
	echo "<h2 style='color:deeppink'>總額 : {$GLOBALS["amount2"]}</h2>";
}

getAmount2();
showAmount2();
?>

<h2>static</h2>
<?php 
function myStatic(){
	static $i = 0;  //local static i:1 
	$i++;
	return $i;
} 

echo "first i : ", myStatic(), "<br>";
echo "second i : ", myStatic(), "<br>";
echo "third i : ", myStatic(), "<br>";
?>

</body>
</html>