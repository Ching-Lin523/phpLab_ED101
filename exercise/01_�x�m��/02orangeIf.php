<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oraneIF</title>
</head>
<body>
    <?php 
        $money = 0;
        echo "選擇等級:", $_GET['level'],"<br>","選擇公斤數:",$_GET['kg'];
        if($_GET['level'] == "1"){
            if($_GET['kg'] <= 40){
                $money = $_GET['kg'] * 30;
            }elseif($_GET['kg'] > 40 && $_GET['kg'] <= 100){
                $money = $_GET['kg'] *25;
            }else {
                $money = $_GET['kg'] *20;
            }
        }elseif ($_GET['level'] == "2") {
            if($_GET['kg'] <= 40){
                $money = $_GET['kg'] * 25;
            }elseif($_GET['kg'] > 40 && $_GET['kg'] <= 100){
                $money = $_GET['kg'] *20;
            }else {
                $money = $_GET['kg'] *15;
            }
        }else {
            if($_GET['kg'] <= 40){
                $money = $_GET['kg'] * 20;
            }elseif($_GET['kg'] > 40 && $_GET['kg'] <= 100){
                $money = $_GET['kg'] *15;
            }else {
                $money = $_GET['kg'] *10;
            }
        }

        echo "<hr>";
        echo $money;
    
    ?>
</body>
</html>