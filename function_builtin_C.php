<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
</head>
<body>
<h2>floor(), ceil()</h2>
<?php 
echo floor(2.3), "<br>";
echo ceil(2.3), "<br>";
?>	


<h2>string</h2>
<?php 
$str = "abcdeabcde";
echo 'strlen($str) : ', strlen($str), "<br>";
echo 'strpos($str,"cd") : ', strpos($str,"cd"), "<br>";
echo 'substr($str,3,5) : ', substr($str,3,5), "<br>";


$title = "不忍時中成「網紅」全台巡迴演出";
echo 'strlen($title) : ', strlen($title), "<br>";
echo 'strpos($title,"時中") : ', strpos($title,"時中"), "<br>";

echo 'mb_strlen($title) : ', mb_strlen($title), "<br>";
echo 'mb_strpos($title,"時中") : ', mb_strpos($title,"時中"), "<br>";
echo 'mb_substr($title,0,8) : ', mb_substr($title,0,8), "<br>";

//-------------------------------------------------------------
if( mb_strlen($title) > 10){
	echo mb_substr($title, 0, 10) . "..." , "<br>";
}else{
	echo $title, "<br>";
}

echo mb_strlen($title) > 10 ? mb_substr($title, 0, 10). "..." : $title,  "<br>";

//-------------------------------------------------------------
$path = "10,20#30,30#45,40";
$arr = explode("#", $path); 
foreach($arr as $data){
	echo $data, "<br>";
}
?>  

<h2>time(), date()</h2>
<?php 
$now = time();
echo 'time() : ', time(), "<br>";
echo 'date("Y-m-d H:i:s") : ', date("Y-m-d H:i:s"), "<br>";

$birthday = mktime(0,0,0,3,6,1990);
echo date("Y-m-d  D", $birthday);
?>  
</body>
</html>