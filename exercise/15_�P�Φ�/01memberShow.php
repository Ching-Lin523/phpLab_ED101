<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "你的會員資料為";
    echo "<table border='1' cellspecing='0'>";
    //
    echo "<tr>";
    echo "<td>姓名";
    echo "</td>";
    echo "<td>$_GET[memName]";
    echo "</td>";
    echo "</tr>";
    //
    
    //
    echo "<tr>";
    echo "<td>帳號";
    echo "</td>";
    echo "<td>$_GET[memId]";
    echo "</td>";
    echo "</tr>";
    //
    
    //
    echo "<tr>";
    echo "<td>密碼";
    echo "</td>";
    echo "<td>$_GET[memPsw]";
    echo "</td>";
    echo "</tr>";
    //
    
    //
    echo "<tr>";
    echo "<td>e-mail";
    echo "</td>";
    echo "<td>$_GET[email]";
    echo "</td>";
    echo "</tr>";
    //
    //
    echo "<tr>";
    echo "<td>性別";
    echo "</td>";
    echo "<td>$_GET[sex]";
    echo "</td>";
    echo "</tr>";
    //
    //
    echo "<tr>";
    echo "<td>生日";
    echo "</td>";
    echo "<td>$_GET[birthday]";
    echo "</td>";
    echo "</tr>";
    //
    //
    echo "<tr>";
    echo "<td>連絡電話";
    echo "</td>";
    echo "<td>$_GET[tel]";
    echo "</td>";
    echo "</tr>";
    //
    // echo "姓名:",$_GET["memName"],"<br>";
    // echo "帳號:",$_GET["memId"],"<br>";
    // echo "密碼:",$_GET["memPsw"],"<br>";
    // echo "e-mail:",$_GET["email"], "<br>";
    // echo "性別:",$_GET["sex"],"<br>";
    // echo "生日:",$_GET["birthday"],"<br>";
    // echo "連絡電話:",$_GET["tel"],"<br>";
    
    echo "</table>";
    ?>
</body>
</html>