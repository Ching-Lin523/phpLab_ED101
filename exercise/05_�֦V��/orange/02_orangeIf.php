<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            border: 2px solid skyblue;
            display: inline-block;

            /* text-align: center; */
            position: relative;
            margin-top: 30px;
            left: 50%;
            transform: translateX(-50%);
            padding: 20px;
        }

        /* .total {
            
            display: inline-block;
            margin: auto;
        }

        .btn {
            text-align: center;
        } */
    </style>
</head>
<body>


<?php

$class = $_GET["class"];
$kg = $_GET["kg"];

echo "<form>";
echo "<h3>", "計算橘子等級與公斤數", "</h3>";

if($class == 1 && $kg <=40){
    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 30, "元";
    
}else if($class == 1 && $kg <100){

    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 25, "元";

}else if($class == 1){

    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 20, "元";
    
};

if($class == 2 && $kg <=40){
    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 25, "元";
}else if($class == 2 && $kg <100){
    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 20, "元";
}else if($class == 2){
    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 15, "元";
};

if($class == 3 && $kg <=40){
    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 20, "元";
}else if($class == 3 && $kg <100){
    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 15, "元";
}else if($class == 3){
    echo "等級：", $class, "<br>", "<br>";
    echo "公斤：", $kg , "<br>", "<br>";

    echo "總共：", $kg * 10, "元";
};

echo "</form>";

?>
    
</body>
</html>