<?php

//宣告變數
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'mgge60708';

//與函數方式差異，可直接設定資料庫
$db_dbname = 'j_asset';

//項目 new mysqli(主機,使用者名稱,帳號,資料庫);
$db_link = new mysqli($db_host, $db_username,$db_password ,$db_dbname);

//print_r($db_link);
if($db_link->connect_error ==''){
  //echo '連線成功';
  //使用時機 設定編碼方式
  $db_link->query("SET NAMES 'utf8'");
}else{
  die('連線失敗');
}


?>