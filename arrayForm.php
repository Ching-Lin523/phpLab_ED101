<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>

</head>
<body>
   <?php 
   echo "帳號 : ", $_GET["memId"], "<hr>";

   echo "<br>英語文能力 : <br>";
   if(isset($_GET["ability"]) == true){
	   foreach( $_GET["ability"] as $i => $data){
			echo $data, "<br>";
	   }

   }


   echo "<hr>專長 : <br>";
   if(isset($_GET["specialty"])){
	   foreach( $_GET["specialty"] as $i => $data){
			echo $data, "<br>";
	   }     	
   }
 

    ?> 
</body>
</html>