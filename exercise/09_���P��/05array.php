<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$arr = [];
$max = 0;
$min = 0;
$count = 0;
for($i=0;$i<10;$i++){
    $arr[$i] = rand(1,100);
    $count += $arr[$i];
    echo $arr[$i],' ,';

    if($max == 0 && $min == 0){
    $max = $arr[$i];
    $min = $arr[$i];
    }elseif($arr[$i] > $max){
        $max = $arr[$i];
    }  elseif($arr[$i] > $min){
        $min = $arr[$i];
    }  
    
    
}

echo '<br>';
echo '總和 : ',$count;
echo '<br>';
echo 'MAX : ',$max;
echo '<br>';
echo 'MIN : ',$min;
?>

</body>
</html>