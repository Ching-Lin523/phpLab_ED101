<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
<?php 
$a = 10;
echo "有變數a嗎? ", isset($a), "<br>"; //有
echo "有變數b嗎? ", isset($b), "<br>"; //没有

unset($a);
echo "有變數a嗎? ", isset($a), "<br>"; //没有
echo "有變數b嗎? ", isset($b), "<br>"; //没有
?>    
</body>
</html>