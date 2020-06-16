<!-- 

JS => Math.random()
PHP => rand(min,max) 

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $ball = 0;
    $money = 0;
    $count = 1;
    do {
        $ball = rand(0,10);
        $money += $ball * 100;

        if($ball > 0){
            echo ($ball*100),'元';
            echo '第',$count,'次<br>';
        }

        $count++;
        
    } while ($ball > 0);

    echo 'total',$money,'$';

    ?>


</body>
</html>