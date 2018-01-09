<?php

include "connect.php";

if(session_id() == ''){
  session_start();
}
$user_check = $_SESSION['login_staff'];

$sec = mysql_query("SELECT * from staff where sid='$user_check'");
$row = mysql_fetch_assoc($sec);


if(!isset($login_session)){
  echo ".";
}
 ?>
