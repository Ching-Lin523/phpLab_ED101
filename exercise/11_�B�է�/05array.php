<!DOCTYPE html>
<html lang="zh-hant">
<head>
	<meta charset="utf-8">
	<title></title>

</head>

<body>
    <?php
        $arr = array();
        $total = 0;
        for($i = 0; $i <10; $i++){
            $num = rand(1,100);
            echo $num, " ";
            $arr[] = $num;
            $total += $num;
            $min = min($arr);
            $max = max($arr);
        };
        echo "<br>";
        echo "總和:", $total;
        echo " 最小值:", $min;
        echo " 最大值:", $max;
	?>

</body>
</html>
