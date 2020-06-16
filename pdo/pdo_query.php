<?php 
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);

	$sql = "select * from products";
	$pdoStatement = $pdo->query($sql);
	
} catch (PDOException $e) {
	// echo "系統暫時無法提供服務, 請通知系統維護人員<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>

<body>

	<table border="1" align="center" width="800" cellspacing="0">
	<tr>
		<th>書號</th>
		<th>書名</th>
		<th>價格</th>
		<th>作者</th>
	</tr>	
	
<?php 
	while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
?>
		<tr>
		<td> <?=$row["psn"];?></td>
		<td> <?=$row["pname"];?></td>
		<td> <?=$row["price"];?></td>	
		<td> <?=$row["author"];?></td>
		</tr>	
<?php		
	}
?>    
</table>
</body>
</html>