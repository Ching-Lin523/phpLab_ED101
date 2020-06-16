<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>

</head>
<body>

<?php 
$num = 10;
$str = "abc";
echo gettype($num), "<br>";
echo is_string($num), "<br>";//false
echo is_integer($num), "<br>";//true

var_dump($num, $str);
?>    

<h2>data convert(自動)</h2>
<?php 
$aInt = 123;   
$bStr = "100";   
$cBool =  true; 

echo ($aInt + $bStr) , "<br>"; // + 在PHP中只有一種意思:算術加法
echo ($aInt + $cBool) , "<br>";
echo ($bStr + $cBool) , "<br>";
?>

<h2>data convert(強制)</h2>
<?php 
$aInt = 123;   
$bStr = (int) "100NT$"; //將轉型後的資料給 $bStr  
$cBool =  true; 

echo ($aInt + $bStr) , "<br>";
echo ($aInt + $cBool) , "<br>";
echo ($bStr + $cBool) , "<br>";
?>


</body>
</html>