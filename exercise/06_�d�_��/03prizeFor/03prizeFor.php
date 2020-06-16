<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03prizeFor</title>
</head>
<body>
    <?php
    $sum=0;
    for($i=0;$i<10;$i++){
        $ballNo=rand(0,10);
        echo "第",$i+1,"次: ",$ballNo*100,"元","<br>";
        $sum+=$ballNo*100;
    }    
    echo "<br>","共喜你！一共",$sum,"元！";
    
    
    ?>
</body>
</html>