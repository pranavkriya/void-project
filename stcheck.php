<?php
if(session_id() == ''){
  session_start();
}
$error='';
if(isset($_POST['submit'])){
  if(empty($_POST['sid']) || empty($_POST['pass'])){
    $error = "Enter Username/Password";
  }else{
    include "connect.php";

    $sid = $_POST['sid'];
    $password = $_POST['pass'];

    $query = mysql_query("SELECT * from staff_login where sid='$sid' AND password='$password'");
    $row = mysql_num_rows($query);
    if($row == 1){
      $_SESSION['login_staff'] = $sid;
      // header('Location: stlogin.php');
    }else{
      $error = "Username/password is invalid";
    }
  }
}



 ?>
