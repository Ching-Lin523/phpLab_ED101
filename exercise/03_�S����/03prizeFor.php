<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prizeFor</title>
</head>
<body>
    <?php
    $total=0;
    for($i=1;$i<=10;$i++){
        echo"你抽出了", $r=rand(0,10)," 號球 獲得金額 ",$r*100," 元 <br>"; 
        $total+=$r*100;
    }
    echo"<hr>";
    echo"共獲得獲得金額 ",$total," 元"; 
    ?>
</body>
</html>