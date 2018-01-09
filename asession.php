<?php

include "connect.php";

if(session_id() == ''){
  session_start();
}
$user_check = $_SESSION['login_admin'];

$sec = mysql_query("SELECT * from admin where aid='$user_check'");
$row = mysql_fetch_assoc($sec);


if(!isset($login_session)){
  echo ".";
}
 ?>
