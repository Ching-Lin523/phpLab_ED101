<?php 
try {
	require_once("connectBooks.php");
	$sql = "select * from products";
	$products = $pdo->query($sql);
	$products->bindColumn("psn", $psn);
	$products->bindColumn("pname", $pname);
	$products->bindColumn("price", $price);
	$products->bindColumn("author", $author);
	
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
	while($products->fetch(PDO::FETCH_ASSOC)){
?>
		<tr>
		<td> <?=$psn?></td>
		<td> <?=$pname?></td>
		<td> <?=$price?></td>	
		<td> <?=$author?></td>
		</tr>	
<?php		
	}
?>    
</table>
</body>
</html>