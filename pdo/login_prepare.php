<?php 
try {
	require_once("connectBooks.php");
	// //--------------------------------------------Question mark parameter
	// $sql = "select * from `member` where memId=? and memPsw=?";
	// $member = $pdo->prepare($sql);	 //事先編譯好指令, 傳回PDOStatement
	// $member->bindValue(1, $_POST["memId"]); //帶入資料
	// $member->bindValue(2, $_POST["memPsw"]);
	// $member->execute();

	//--------------------------------------------named parameter
	$sql = "select * from `member` where memId=:memId and memPsw=:memPsw";
	$member = $pdo->prepare($sql);	 //事先編譯好指令, 傳回PDOStatement
	$member->bindValue(":memId", $_POST["memId"]); //帶入資料
	$member->bindValue(":memPsw", $_POST["memPsw"]);
	$member->execute();


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
</head>
<body>
<?php 
if( $member->rowCount() == 0){
	echo "帳密錯誤, 請<a href='login.html'>重新登入</a>";
}else{
	//取回資料錄
	$memRow = $member->fetch(PDO::FETCH_ASSOC);
	echo $memRow["memName"], "您好~<br>";
}
?>  
</body>
</html>