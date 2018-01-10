<?php

$error = '';
if(isset($_POST['submit'])){
  if(empty($_POST['place_found']) || empty($_POST['by_whom']) || empty($_POST['reason']) || empty($_POST['adhid_whom'])){
    $error = 'Enter Place Found, Reason, AdhaarID of Founder and the name of Founder';
}else{
  include "connect.php";

  $kid = $_POST['kid'];
  $ngoid = isset($_POST['ngoid']) ? $_POST['ngoid'] : '';
  $adhid = $_POST['adhid'];
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $place_found = $_POST['place_found'];
  $by_whom = $_POST['by_whom'];
  $date_when_found = $_POST['date_when_found'];
  $reason = $_POST['reason'];
  $adhid_whom = $_POST['adhid_whom'];
  // $image = $_POST['image'];


  $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
  $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
  $imageType = mysql_real_escape_string($_FILES["image"]["type"]);

  $status = $_POST['status'];


  if(substr($imageType,0,5) == "image"){
    $query = mysql_query("SELECT kid from child where kid='$kid'");
    $row = mysql_num_rows($query);
    if($row){
      $error = "This id exists. Enter Unique ID.";
    }else{
      $insert = "INSERT INTO child values('$kid', '$ngoid', '$adhid', '$name', '$dob', '$place_found', '$by_whom', '$date_when_found', '$reason', '$adhid_whom', '$imageData', '$status')";
        if(!mysql_query($insert)){
          $error = "Error" .mysql_error();
        }else{
            $error = "Data saved success";
        }
      }
    }
  else{
    $error = "Only images are allowed";
  }

}

}


?>
