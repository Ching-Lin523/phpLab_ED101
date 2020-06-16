<?php 
try{ 
	require_once("connectBooks.php");
	
	$sql = "select * from `member` where memId='{$_GET["memId"]}' and memPsw='{$_GET["memPsw"]}'";
	$member = $pdo->query($sql);	
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
<meta http-equiv="expires" content="Jan 4, ">
<title>Examples</title>
</head>
<body>
<?php 
if( $member->rowCount() == 0){
	// echo "帳密錯誤, 請<a href='login.html'>重新登入</a>";
	echo "<script>alert('帳密錯誤, 請重新登入');location.href='login.html';</script>";
}else{
	//取回資料錄
	$memRow = $member->fetch(PDO::FETCH_ASSOC);
	echo $memRow["memName"], "您好~<br>";
}
?>  
</body>
</html>