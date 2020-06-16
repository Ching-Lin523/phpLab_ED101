<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<?php 
$lowType=1;
switch($lowType){
	case "1":
	  $amt = 6000;
	  break;
	case "2":
	  $amt = 5000;
	  break;
	case "3":
	  $amt = 4000;
	  break;
	default:
	  $amt = 0;
}
echo "補助款為 $amt 元";

?>    
</body>
</html>