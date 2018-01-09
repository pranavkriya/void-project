<?php
include "connect.php";
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$sel=mysql_query("select * from master where id='$uid' and status='A'");
if($info=mysql_fetch_array($sel)){
	if($pass==$info['password']){
		session_start();
		$_SESSION['id']=$uid;
		$_SESSION['type']=$info['type'];
		}
		else{
			echo "Wrong Password";
			}
	}
else{
	echo "Login Failed Wrong User ID";
	}	
?>