<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $arry = [];
  $max = 1;
  $min = 100;
  $total = 0; 
  for($i = 0; $i < 10; $i++){
    $arry[$i] = rand(1,100);
    $total += $arry[$i];
    echo $arry[$i],"<br>";
    if($arry[$i] >= $max){
      $max = $arry[$i];
    }else if($arry[$i] <= $min){
      $min = $arry[$i];
    };
    
  };
  echo "total =",$total,"<br>";
  echo "max =",$max,"<br>";
  echo "min =",$min,"<br>";
?>


</body>
</html>