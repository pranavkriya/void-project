<?php
$error = '';
if(isset($_POST['submit'])){
include "connect.php";

$adhid = $_POST['adhid'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$addr = $_POST['address'];
// $fir = $_POST['fir'];

$firName = mysql_real_escape_string($_FILES["fir"]["name"]);
$firData = mysql_real_escape_string(file_get_contents($_FILES["fir"]["tmp_name"]));
$firType = mysql_real_escape_string($_FILES["fir"]["type"]);

$location = $_POST['last_seen_location'];
$time = $_POST['last_seen_time'];
$kadhid = $_POST['kadhid'];
// $image = $_POST['image'];

$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
$imageType = mysql_real_escape_string($_FILES["image"]["type"]);

if(substr($imageType,0,5) == "image" && substr($firType,0,5) == "image"){
  $insert = "INSERT INTO parent values('$adhid', '$name', '$contact', '$email', '$addr', '$firData', '$location', '$time', '$kadhid', '$imageData')";
  if(!mysql_query($insert)){
    echo "Error" .mysql_error();
  }else{
      $error = "Your query has been submitted";
  }
}else{
  $error = "Only images are allowed";
}

}


?>
