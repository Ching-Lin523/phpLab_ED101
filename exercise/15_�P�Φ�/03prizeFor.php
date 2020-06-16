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
        for($i = 1 ;$i < 11; $i++){
            $ballNum = rand(0,10);
            echo "第 $i 次:",$ballNum;
            echo "<br>";
            $total += $ballNum;
        }
        echo "<br>";
        echo "總金額為:",$total * 100,"元";
    ?>

</body>
</html>