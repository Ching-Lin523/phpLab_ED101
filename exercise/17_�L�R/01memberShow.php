<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table ,tr ,td {
    border : 1px solid #000;
    }
    </style>
</head>


<body id="body">

<?php
echo "<table>";
echo "<tr><td>姓名：</td><td>{$_GET["memName"]}</td></tr>";
echo "<tr><td>帳號：</td><td>{$_GET["memId"]}</td></tr>";
echo "<tr><td>密碼：</td><td>{$_GET["memPsw"]}</td></tr>";
echo "<tr><td>E-mail：</td><td>{$_GET["email"]}</td></tr>";
echo "<tr><td>性別：</td><td>{$_GET["sex"]}</td></tr>";
echo "<tr><td>生日：</td><td>{$_GET["birthday"]}</td></tr>";
echo "<tr><td>聯絡電話：</td><td>{$_GET["tel"]}</td></tr>";
echo "</table>";


?>



</body>
</html>