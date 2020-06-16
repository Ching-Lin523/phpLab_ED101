<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
	h2{
		color:deeppink;
	}
</style>
</head>
<body>
<?php 
echo "<h2>Hello~</h2>";
echo "Welcome to PHP.............<br>";
echo 25 , "<br>";
echo 025 , "<br>";  //2*8 + 5 -->21
echo 0x25 , "<br>"; //2*16 + 5 -->37
echo 1.2e5, "<br>";
?> 

<h2>boolean</h2>
<?php 
echo "true", "<br>";
echo "true :", true, "<br>";  //1
echo "false :", false, "<br>"; //
 ?>  

<h2>string : 單引號</h2>
<?php 
	echo 'I am Sara', "<br>";
	echo 'I am "Sara"', "<br>";
	echo 'I am \'Sara\'', "<br>";
	echo 'I am \Sara\\', "<br>";
	echo 'I am \\Sara\\', "<br>";
?> 


<h2>string : 雙引號</h2>
<?php 
	echo "I am 'Sara'", "<br>\n";
	echo "I am \"Sara\"", "<br>";
 ?>


 <h2>string : 雙引號有變數替換的功能----</h2>
 <?php 
 $name = "Sara";
 $money = 70000000;
 echo "姓名 : ", $name, "有", $money, "元<br>";

 echo '姓名 : $name 有 $money<br>'; //單引號没有變數替換的功能
 echo "姓名 : $name 有 $money 元<br>";
 echo "姓名 : {$name}有{$money}元<br>";
 // echo "姓名 : {$name}有{$money*2}元<br>";//error,不能含有運算式

 echo "姓名 : $name 有 $money\$NT<br>";
  ?>
<hr>
  姓名 : <?=$name?>
</body>
</html>