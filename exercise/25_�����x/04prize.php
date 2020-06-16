<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
$num = 0;
$i = 0;
while($i<=10){
  $i = rand(1,10);
  echo $num += $i*100 , "<br>";
  $i++;
}
?>   
</body>
</html>
