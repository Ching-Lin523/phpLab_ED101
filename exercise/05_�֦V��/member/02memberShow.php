<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<style>
    
    h3{
        text-align: center;
    }

    table{
        margin: auto;
    }

</style>
</head>
<body>
<?php 
echo "<div>";
echo "<h3>", "您的會員資料為", "</h3>";
echo "<table border=1>";
echo "<tr>", "<td>姓名：</td>", "<td>", $_GET["memName"], "</td>", "</tr>";
echo "<tr>","<td>帳號：</td>", "<td>",$_GET["memId"],"</td>", "</tr>";
echo "<tr>","<td>密碼：</td>", "<td>",$_GET["memPsw"],"</td>", "</tr>";
echo "<tr>","<td>性別：</td>", "<td>",$_GET["sex"], "</td>","</tr>";
echo "<tr>","<td>生日：</td>", "<td>",$_GET["birthday"],"</td>", "</tr>";
echo "<tr>","<td>聯絡電話：</td>", "<td>",$_GET["tel"],"</td>", "</tr>";
echo "</table>";
echo "</div>";


?>  
</body>
</html>