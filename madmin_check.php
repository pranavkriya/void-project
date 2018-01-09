<?php
session_start();
    $error ='';
    if(isset($_POST['submit'])){
      include 'connect.php';

      $id = $_POST['id'];
      $password = $_POST['pass'];

      $query = mysql_query("SELECT * from master_admin where jid='$id' AND password='$password'");
      $res = mysql_num_rows($query);
      if($res){
        $_SESSION['login_master'] = $id;
      }else{
        $error = "Either Id/Password is incorrect";
      }
    }
?>
