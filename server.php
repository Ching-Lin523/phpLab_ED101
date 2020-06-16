<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>

</head>
<body>
<?php 
echo "IP : " , $_SERVER["REMOTE_ADDR"], "您好~<br>";
echo "IP : {$_SERVER["REMOTE_ADDR"]}, 您好~<br>";
echo "目前執行的程式是 : {$_SERVER["PHP_SELF"]}~<br>";

// if($_SERVER["REMOTE_ADDR"] == "10.120.31.5"){
// 	echo "Hi~";
// }else{
// 	echo "><";
// }

phpinfo();
 ?>
</body>
</html>