<?php

if($_GET["level"]=="1"){
    if($_GET["memNum"]>100){
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 超過100公斤享有20/公斤的優惠 <br>";
        echo "共需付", 20 * (int) $_GET["memNum"] ," 元";
        
    }
    else if($_GET["memNum"]>40){
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 超過40公斤享有20/公斤的優惠 <br>";
        echo "共需付", 25 * (int) $_GET["memNum"] ," 元";
        
    }else {
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 30/公斤 <br>";
        echo "共需付", 30 * (int) $_GET["memNum"] ," 元";
    }
} 
if($_GET["level"]=="2"){
    if($_GET["memNum"]>100){
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 超過100公斤享有20/公斤的優惠 <br>";
        echo "共需付", 20 * (int) $_GET["memNum"] ," 元";
        
    }
    else if($_GET["memNum"]>40){
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 超過40公斤享有20/公斤的優惠 <br>";
        echo "共需付", 25 * (int) $_GET["memNum"] ," 元";
        
    }else {
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 30/公斤 <br>";
        echo "共需付", 30 * (int) $_GET["memNum"] ," 元";
    }
}   
if($_GET["level"]=="3"){
    if($_GET["memNum"]>100){
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 超過100公斤享有20/公斤的優惠 <br>";
        echo "共需付", 20 * (int) $_GET["memNum"] ," 元";
        
    }
    else if($_GET["memNum"]>40){
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 超過40公斤享有20/公斤的優惠 <br>";
        echo "共需付", 25 * (int) $_GET["memNum"] ," 元";
        
    }else {
        echo "您購買等級 ",$_GET["level"]," 的橘子",$_GET["memNum"],"公斤 30/公斤 <br>";
        echo "共需付", 30 * (int) $_GET["memNum"] ," 元";
    }
}  
?>
