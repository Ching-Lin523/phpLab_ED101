<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
$num=0;
for($i=1; $i<=10 ; $i++){ 
  echo  $num += rand(1,10)*100 , "<br>"; 
}
?>   
</body>
</html>
