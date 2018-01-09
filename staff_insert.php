<?php
$error = '';
if(isset($_POST['submit'])){
  if(empty($_POST['sid']) || empty($_POST['ngoid']) || empty($_POST['adhid'])){
    $error = 'Enter Staff Id, NGO Id or Adhaar Id of person' .mysql_error();
}else{
include "connect.php";

$sid = $_POST['sid'];
$ngoid = $_POST['ngoid'];
$name = $_POST['name'];
$addr = $_POST['address'];
$adhid = $_POST['adhid'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$status = $_POST['status'];

$query = mysql_query("SELECT sid from staff where sid='$sid'");
$row = mysql_num_rows($query);
if($row){
  $error = "This id exists. Enter Unique ID.";
}else{
  $insert = "INSERT INTO staff values('$sid', '$ngoid', '$name', '$addr', '$adhid', '$contact', '$email', '$status')";
  $q = mysql_query($insert);
  if(!$q){
    $error = "Error";
  }
  $error = "Data saved success";
}
}
}
?>
