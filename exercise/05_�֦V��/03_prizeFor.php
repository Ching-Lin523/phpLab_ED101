<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $total = 0;
    for($i = 1; $i<11; $i++){
        $j = rand(0,10);
        $prize = $j*100;
        
        echo '第', $i,'次抽取：', ' ', $prize,'元',' ','累積獎金',  $total+=$prize,'元', '<br>';
    };
    
    ?>

</body>
</html>