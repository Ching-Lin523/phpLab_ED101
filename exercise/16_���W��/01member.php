<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>01member</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style>
.nimbus-is-editor{
    width: 300px;
    margin: 50px auto;
    line-height: 3;
}
table ,tr ,td {
    border : 1px solid #000;
}
tr{
    width: 800px;
}
.text{
    width: 150px;
    margin-right: 20px;
    margin-left: 3px;
}

</style>
</head>

<body>
<?php 
echo "<nimbus-is-editor>";
echo "<table>";

echo "<tr><td>姓名：</td><td>{$_GET["memName"]}</td></tr>";
echo "<tr><td>帳號：</td><td>{$_GET["memId"]}</td></tr>";
echo "<tr><td>密碼：</td><td>{$_GET["memPsw"]}</td></tr>";
echo "<tr><td>E-mail：</td><td>{$_GET["email"]}</td></tr>";
echo "<tr><td>性別：</td><td>{$_GET["sex"]}</td></tr>";
echo "<tr><td>生日：</td><td>{$_GET["birthday"]}</td></tr>";
echo "<tr><td>聯絡電話：</td><td>{$_GET["tel"]}</td></tr>";

echo "</table>";
echo "</nimbus-is-editor>";

// echo "<tr><td>$email</td><td>$name</td></tr>";
// echo "帳號 : ", $_REQUEST["memId"], "<br>"; //POST, GET
// echo "密碼 : ", $_REQUEST["memPsw"], "<br>";
?>  
</body>
</html>