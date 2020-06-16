<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>lucky boll</h2>
<?php
$i =0;
for($j =1; $j<=10; $j++){
    $i = rand(0,10);
    echo "次數 : ",$j," ";
    echo "號碼 : ",$i," ";
    echo "<br>";
  
}

?>

</body>
</html>