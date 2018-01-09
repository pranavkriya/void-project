<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>logged in</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

	<style>
	.link1{
		height:300px;
		color:red;
		font-size:30px;
		padding-left:140px;
		padding-top:10px;
		background-color:white;
	}

	.circle1 {
    border: 2px solid red;
	float:left;
    padding-left: px;
	margin-right:100px;
    border-radius: 50%;
	margin-top:80px;
    width:280px;
    height:280px;
	background-color:gold;

	}
	.circle1:hover{
		background-color:gray;
		opacity:.6;
		color:blue;
	}
	.inside1{
		font-size:30px;
		padding-left:80px;
		font-weight:bold;
		padding-top:100px;
		padding-right:35px;
	}
	</style>
</head><!--/head-->

<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
          <!--      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>    -->
                <a class="navbar-brand" href="index.html"><img src="images/hope.png" style="height:80px;width:150px" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
					          <li class="active" ><a href="query.html">Register a Query</a></li>
					          <li><a href="registration.html">Administration</a></li>
					          <li><a href="terms.html">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->


    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="font-size:35px">Welcome User!!</h2>
                </div>
            </div>
        </div>
    </section><!--/#title-->


<?php
include "connect.php";
session_start();

$sel=1;
$type=$_SESSION['type'];
if(isset($_SESSION['id'])&&isset($_SESSION['type'])){
	if($type=='a')
	$sel=mysql_query("select * from access where a='Y'");
    if($type=='ma')
	$sel=mysql_query("select * from access where ma='Y'");
    if($type=='s')
	$sel=mysql_query("select * from access where s='Y'");
while($info=mysql_fetch_array($sel)){
?>


<!--	<div class="link1">
		   <a href="<?php echo $info['link']?>">
			     <div class="circle1">
				         <p class="inside1">
					              <?php echo $info['display'];?>
				         </p>
			     </div>
       </a>


-->

<?php
}
?>
	<!--	</div>  -->fffffff
<?php
}
else{
	header("location:login_members.php");
	}
?>


	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" >VOID</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
