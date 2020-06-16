<?php 
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);

	$sql = "select * from products";
	$products = $pdo->query($sql);
	$prodRows = $products->fetchAll(PDO::FETCH_ASSOC);
	
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
		<th>書號</th>
		<th>書名</th>
		<th>價格</th>
		<th>作者</th>
	</tr>	
	
<?php 
	// for($i=0; $i<count($prodRows); $i++){
	// 	$prodRow = $prodRows[$i];

	foreach($prodRows as $prodRow){
?>
		<tr>
		<td> <?=$prodRow["psn"];?></td>
		<td> <?=$prodRow["pname"];?></td>
		<td> <?=$prodRow["price"];?></td>	
		<td> <?=$prodRow["author"];?></td>
		</tr>	
<?php		
	}
?>    
</table>
</body>
</html>