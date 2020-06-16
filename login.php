<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<style>
	.title{
		color:blue
	}
</style>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
<?php 
echo "<h2 class='title'>帳號 : ", $_GET["memId"], "</h2><br>";
echo "密碼 : ", $_GET["memPsw"], "<br>";
echo "分享了什麼 : <br>";
echo $_GET["note"], "<br>";

echo "<hr>";
echo "分享了什麼 : <br>";
echo nl2br($_GET["note"]), "<br>";


// echo "帳號 : ", $_REQUEST["memId"], "<br>"; //POST, GET
// echo "密碼 : ", $_REQUEST["memPsw"], "<br>";
?>  
</body>
</html>