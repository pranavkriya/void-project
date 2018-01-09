<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery-1.11.1.min.js" type="application/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table>
<tr>
<td>UserID</td>
<td><input type="text" id="uid" name="uid"></td>
</tr>
<tr>
<td>password</td>
<td><input type="text" id="pass" name="pass"></td>
</tr>
<tr>
<td><input type="submit" id="sub"/></td>
</tr>
</table>
<script>
$(document).ready(function(e) {
 $("#sub").click(function(){
	 var uid=$("#uid").val();
	 var pass=$("#pass").val();
	 if(uid==""){
		 alert("Enter USER ID");
		 return false;
		 }
		 if(pass==""){
			 alert("Enter Password");
			 return false;
			 }
	 var my="uid="+uid+"&pass="+pass;
	 $.ajax({
		 data:my,
		 type:'post',
		 url:"login_check_members.php",
		 success: function(m){
			 if(m==""){
				 window.location.href="loggedin_members.php";
				 }
				 else{
					 alert(m);
					 }
			 }
		 });
	 });   
});
</script>
</body>
</html>