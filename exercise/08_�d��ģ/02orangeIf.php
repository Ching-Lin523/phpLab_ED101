<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oraneIF</title>
</head>
<body>
    <?php 
        $price = 0;
        echo "選擇等級:", $_POST['level'],"<br>","選擇公斤數:",$_POST['kg'];
        if($_POST['level'] == "1"){
            if($_POST['kg'] <= 40){
                $price = $_POST['kg'] * 30;
            }elseif($_POST['kg'] > 40 && $_POST['kg'] <= 100){
                $price = $_POST['kg'] *25;
            }else {
                $price = $_POST['kg'] *20;
            }
        }elseif ($_POST['level'] == "2") {
            if($_POST['kg'] <= 40){
                $price = $_POST['kg'] * 25;
            }elseif($_POST['kg'] > 40 && $_POST['kg'] <= 100){
                $price = $_POST['kg'] *20;
            }else {
                $price = $_POST['kg'] *15;
            }
        }else {
            if($_POST['kg'] <= 40){
                $price = $_POST['kg'] * 20;
            }elseif($_POST['kg'] > 40 && $_POST['kg'] <= 100){
                $price = $_POST['kg'] *15;
            }else {
                $price = $_POST['kg'] *10;
            }
        }

        echo "<hr>";
        echo $price;
    
    ?>
</body>
</html>