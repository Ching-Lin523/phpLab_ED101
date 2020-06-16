<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<?php 
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
	echo "連線成功~<br>";

	$sql = "update products set price += 200"; //sql語法錯誤
	// $sql = "update products set price = price + 200"; //正確sql語法
	$affectedRows = $pdo->exec($sql);
	echo "成功的異動了{$affectedRows}筆資料<br>";	
} catch (PDOException $e) {
	// echo "系統暫時無法提供服務, 請通知系統維護人員<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
}

?> 


<?php 
// echo "PDO::ATTR_CASE : ", PDO::ATTR_CASE, "<br>";
// echo "PDO::CASE_NATURAL : ", PDO::CASE_NATURAL, "<br>";
// echo "PDO::CASE_UPPER : ", PDO::CASE_UPPER, "<br>";
// echo "PDO::CASE_LOWER : ", PDO::CASE_LOWER, "<br>";
?> 




</body>
</html>