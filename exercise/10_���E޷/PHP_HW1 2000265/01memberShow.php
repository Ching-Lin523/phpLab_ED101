<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<table>  
 <tr>
<td><?php
echo "<td>", "姓名 : ", $_GET["name1"], "<td>";
echo "<td>", "帳號 : ", $_GET["memId"], "<td>";
echo "<td>", "密碼 : ", $_GET["memPsw"], "<td>";
echo "<td>", "EMAIL : ", $_GET["email1"], "<td>";
// echo $_GET["note"], "<br>"
?></td>  
</tr>   
</table> 
</body>
</html>