<!DOCTYPE html>
<html lang="zh-hant">
<head>
	<meta charset="utf-8">
	<title></title>

</head>

<body>
    <?php
        $arr = array();
        $i = 0;
        $total = 0;
        while($i < 10){
            $num = rand(0, 10);
            echo $num, " ";
            if($num == 0)break;
            $arr[] = $num;
            $total += $num;
        };
        echo "<br>";
        echo "次數:",count($arr)+1;
        echo "<br>";
        echo "總金額:", $total*100, "(元)";
    ?>
</body>
</html>


