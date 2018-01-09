<?php
$error = '';
if(isset($_POST['submit'])){
  include 'connect.php';

  $ngoid = $_POST['ngoid'];
  $name = $_POST['name'];
  $capacity = $_POST['capacity'];
  $staff_count = $_POST['staff_count'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $status = $_POST['status'];

  $check = mysql_query("SELECT ngoid from ngo where ngoid='$ngoid'");
  $row = mysql_num_rows($check);
  if($row){
    $error = "This id exists. Enter Unique ID.";
  }else{
    $query = mysql_query("INSERT into ngo values('$ngoid', '$name', '$capacity', '$staff_count', '$city', '$address', '$status')");
    if($query){
      $error = "Data saved success";
    }else{
      $error = "Error" .mysql_error();
    }
  }
}


 ?>
