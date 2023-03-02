<?php
header("Content-Type:text/html; charset=utf-8");
//開啟Session
session_start();
//清除Session
session_unset(); //清Key=>value
session_destroy(); //清ID
//導到login.php
header("location:./Login.php");
?>