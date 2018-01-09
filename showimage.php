<?php
include 'connect.php';

if(isset($_GET['kid'])){
  $id = mysql_real_escape_string($_GET['kid']);
  $query = mysql_query("SELECT * FROM child WHERE kid='$id'");
  while($row = mysql_fetch_assoc($query)){
    $imageData = $row['image'];
  }
  header("content-type: image/jpeg");
  echo $imageData;
}else{
  echo "error" .mysql_error();
}

 ?>
