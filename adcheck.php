<?php
if(session_id() == ''){
  session_start();
}

$error = '';
if(isset($_POST['submit'])){
  if(empty($_POST['uid']) || empty($_POST['pass'])){
    $error = "Enter Username/Password";
  }else{
    include "connect.php";

    $id = $_POST['uid'];
    $password = $_POST['pass'];

    $query = mysql_query("SELECT * from admin_login where id='$id' AND password='$password'");
    $row = mysql_num_rows($query);
    if($row == 1){
      $_SESSION['login_admin'] = $id;
      // header('Location: adlogin.php');
    }else{
      $error = "Username/password is invalid";
    }
  }
}



 ?>
