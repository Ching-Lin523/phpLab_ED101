<?php 
try {
	require_once("connectBooks.php");
	$sql = "select * from `products` where psn=:psn";
	$products = $pdo->prepare($sql);
	$products->bindValue(":psn", $_GET["psn"]);
	$products->execute();
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
	.prodTable th {
		background-color : #bfbfef;
	}
	.prodTable td {
		border-bottom : dotted 1px deeppink;
	}
</style>
</head>
<body>
<?php 
if($products->rowCount()==0){
	echo "<center>查無此商品資料</center>";
}else{
	$prodRow = $products->fetch(PDO::FETCH_ASSOC);
}
?>    
<table align="center" class="prodTable">
	<tr><th>書號</th><td><?=$prodRow["psn"]?></td></tr>
	<tr><th>書名</th><td><?=$prodRow["pname"]?></td></tr>
	<tr><th>價格</th><td><?=$prodRow["price"]?></td></tr>
	<tr><th>作者</th><td><?=$prodRow["author"]?></td></tr>
	<tr><th>頁數</th><td><?=$prodRow["pages"]?></td></tr>
</table>
</body>
</html>