<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_GET["level"] == 1){
            if($_GET["kilo"] <=40){
                echo "小計 : ", $_GET["kilo"] * 30, "元";
            }
            elseif($_GET["kilo"] > 40 && $_GET["kilo"] <= 100){
                echo "小計 : ", $_GET["kilo"] * 25, "元";
            }
            else{
                echo "小計 : ", $_GET["kilo"] * 20, "元";
            }
        }
        elseif($_GET["level"] == 2){
            if($_GET["kilo"] <=40){
                echo "小計 : ", $_GET["kilo"] * 25, "元";
            }
            elseif($_GET["kilo"] > 40 && $_GET["kilo"] <= 100){
                echo "小計 : ", $_GET["kilo"] * 20, "元";
            }
            else{
                echo "小計 : ", $_GET["kilo"] * 15, "元";
            }
        }
        else{
            if($_GET["kilo"] <=40){
                echo "小計 : ", $_GET["kilo"] * 20, "元";
            }
            elseif($_GET["kilo"] > 40 && $_GET["kilo"] <= 100){
                echo "小計 : ", $_GET["kilo"] * 15, "元";
            }
            else{
                echo "小計 : ", $_GET["kilo"] * 10, "元";
            }
        }
        
    ?>
</body>
</html>