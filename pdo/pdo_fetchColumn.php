<?php 
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);

	$sql = "select * from products";
	$products = $pdo->query($sql);
	
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
<style type="text/css">

  table td {border-bottom:1px dotted deeppink;padding:2px 4px;}

</style>
<body>

	<table align="center" width="800">
	<tr bgcolor="#bfbfef">
		<th>column 3</th>
	</tr>	
	
<?php 
	while($data = $products->fetchColumn(3)){
?>
		<tr>
		<td> <?=$data?></td>
		</tr>	
<?php		
	}
?>    
</table>
</body>
</html>