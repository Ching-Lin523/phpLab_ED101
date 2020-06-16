<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$max = 0;
$min = 0;
$arr = []; 
for($i = 0; $i <10; $i++){
    $arr [$i] = rand(1, 100);
    echo  $arr [$i], '<br>';
}

echo '總和：', array_sum($arr), '<br>';
echo '最大值：', max($arr), '<br>';
echo '最小值：', min($arr);




    
?>

    
</body>
</html>