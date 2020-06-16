<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
$num = 0;
$sum = 0;
$min = 101;
$max = 0;
for($i=0; $i<10 ; $i++){ 
  $arr[$i] = rand(1,100);
  echo  $arr[$i] , "<br>";
  if($min > $arr[$i]){
    $min = $arr[$i];
  };
  if($max < $arr[$i]){
    $max = $arr[$i];
  };
  echo "min:", $min ,"max:", $max, "<br>";
  echo  $sum += $arr[$i] , "<br>";
}

// $i = 0;
// while($i<=10){
//   $i = rand(1,10);
//   echo $num += $i*100 , "<br>";
//   $i++;
// }
?>   
</body>
</html>