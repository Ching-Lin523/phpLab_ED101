<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $arr = array(1,3,5,7,9);
        // for($i = 4; $i >= 0 ; $i--){
        //     if($arr[$i]<4){
        //         array_splice($arr, 2, 0, 4);
        //     };
        // };
        // echo print_r($arr);




        $total = 0;
        $arr = array(0);
        for($i=0;$i < 10 ; $i++){
            $num = rand(1,100); 
            $total +=$num;
            for($j = $i; $j >= 0 ; $j--){
                if($arr[$j] < $num){
                    array_splice($arr, $j+1, 0, $num);
                break;
                }
            };
            // $arr[$i] = $num;
            // $arr = array($num);
        };
        // sort($arr);//這個直接排好，根本作弊
        array_splice($arr,0,1);
        // for($i = 0 ; $i < 10 ; $i++){
        //     echo "$arr[$i]\n";
        // }
        // echo "<br>";
        print_r($arr);echo "<br>";
        echo "最小值$arr[0]<br>";
        echo "最大值$arr[9]<br>";
        echo "所有資料總和",$total;
    ?>
</body>
</html>