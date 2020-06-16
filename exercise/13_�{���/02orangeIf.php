<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orange Sale</title>
</head>
<body>
    <?php
$cost = 0;
echo "Level:\n", $_POST['level'],"<br>", "Entered kg:\n", $_POST['kg'], "kgs";

if($_POST ['level'] == "Level 1"){
    if($_POST['kg'] <= 40){
        $cost = $_POST['kg'] * 30;
    } elseif($_POST ['kg'] >= 40 && $_POST['kg'] <= 100){
        $cost = $_POST['kg'] * 25;
    } else{
        $cost = $_POST['kg'] * 20;
    }
}elseif($_POST ['level'] =='Level 2'){
    if($_POST['kg'] <= 40){
        $cost = $_POST['kg'] * 25;
    } elseif($_POST['kg'] >= 40 && $_POST['kg'] <= 100){
        $cost = $_POST['kg'] * 20;
    } else{
        $cost = $_POST['kg'] * 15;
    }
}else{
    if($_POST['kg'] <= 40){
        $cost = $_POST['kg'] * 20;
    }elseif($_POST['kg'] >= 40 && $_POST['kg'] <= 100){
        $cost = $_POST['kg'] * 15;
    }else{
        $cost = $_POST['kg'] * 10;
    }
}
echo "<br>";
echo "Price:\n", $cost;
?>
</body>
</html>