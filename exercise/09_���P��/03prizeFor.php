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

$count = 0;
    for($i=0;$i<10;$i++){
        $num = rand(0,10);
       
        echo ($num),' ,';
        $count += $num; 
    };
    echo"<br>";
        echo ($count);
    ?>


</body>
</html>