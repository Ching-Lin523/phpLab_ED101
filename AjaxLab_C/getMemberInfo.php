<?php 
session_start();
if( isset($_SESSION["memId"])){ //已登入
    $memberInfo = array("memNo"=>$_SESSION["memNo"],"memId"=>$_SESSION["memId"], "memName"=>$_SESSION["memName"], "email"=>$_SESSION["email"], "tel"=>$_SESSION["tel"]);

    echo json_encode($memberInfo);
}else{ //未登入
	echo "{}";
}
?>