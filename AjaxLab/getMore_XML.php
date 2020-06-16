<?php
try{
  require_once("connectBooks.php");
  $sql = "select * from `member` where memId=:memId";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId", $_GET["memId"]);
  $member->execute();

  //如果找得資料，取回資料，送出xml文件
  if($member->rowCount() == 0){ //無此會員資料
  	echo "notFound";
  }else{

  }
  
}catch(PDOException $e){
  echo $e->getMessage();
}
?>