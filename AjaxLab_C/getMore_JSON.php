<?php
try{
  require_once("connectBooks.php");
  $sql = "select * from `member` where memId=:memId";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId", $_GET["memId"]);
  $member->execute();

  //如果找得資料，取回資料，送出xml文件
  if($member->rowCount() == 0){ //無此會員資料
  	echo "{}";
  }else{
    $memRow = $member->fetch(PDO::FETCH_ASSOC);
    echo json_encode($memRow);
  }
}catch(PDOException $e){
  $err = array("error" => "system error~");
  echo json_encode($err);
}
?>