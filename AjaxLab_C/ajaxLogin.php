<?php
session_start();
try{
  require_once("connectBooks.php");
  $sql = "select * from `member` where memId=:memId and memPsw=:memPsw";
  $member = $pdo->prepare($sql); 
  $member->bindValue(":memId", $_POST["memId"]);
  $member->bindValue(":memPsw", $_POST["memPsw"]);
  $member->execute();

  if( $member->rowCount()==0){ //查無此人
	  echo "{}";
  }else{ //登入成功
    //自資料庫中取回資料
  	$memRow = $member->fetch(PDO::FETCH_ASSOC);

  	//將登入者的資訊寫入SESSION
  	$_SESSION["memNo"] = $memRow["no"];
  	$_SESSION["memId"] = $memRow["memId"];
  	$_SESSION["memName"] = $memRow["memName"];
  	$_SESSION["email"] = $memRow["email"];
  	$_SESSION["tel"] = $memRow["tel"];

    //送出登入者的姓名資料
    // echo $memRow["memName"];

    $memberInfo = array("memNo"=>$_SESSION["memNo"],"memId"=>$_SESSION["memId"], "memName"=>$_SESSION["memName"], "email"=>$_SESSION["email"], "tel"=>$_SESSION["tel"]);


    echo json_encode($memberInfo);
  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>