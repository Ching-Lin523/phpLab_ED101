<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
    }
    table{
        border: 1px solid black;
        margin: 0 auto;
        width: 500px;
    }
    table td{
        border: 1px solid black;
    }    
    
</style>
<body>
    <?php 
        echo "<h1>會員資料</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<td> 姓名 :</td>";
        echo "<td>" ,$_GET["memName"], "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> 帳號 :</td>";
        echo "<td>" ,$_GET["memId"], "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> 密碼 :</td>";
        echo "<td>" ,$_GET["memPsw"], "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> e-mail :</td>";
        echo "<td>" ,$_GET["email"], "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> 性別 :</td>";
        echo "<td>" ,$_GET["sex"], "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> 生日 :</td>";
        echo "<td>" ,$_GET["birthday"], "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> 連絡電話 :</td>";
        echo "<td>" ,$_GET["tel"], "</td>";
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>