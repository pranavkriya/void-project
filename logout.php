<?php
session_start();
if(session_destroy()){
  if(isset($_SESSION['login_admin']) || isset($_SESSION['login_staff'])){
      header('Location: registration.php');
  }elseif (isset($_SESSION['login_master'])) {
    header('location: maindex.php');
  }
}
 ?>
