<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration | Flat Theme</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <style>
    body{
      overflow-x: hidden;
    }
    </style>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

	<script src="js/jquery-1.11.1.min.js" type="application/javascript"></script>



</head><!--/head-->
<body>

  <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="maindex.php"><img src="images/hope.png" style="height:80px;width:150px" alt="logo"></a>

          </div>
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="ngolist.php">NGOs Info</a></li>
                  <li><a href="addngo.php">Add NGOs</a></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
          </div>
      </div>
  </header><!--/header-->

<section id="title" class="emerald">
     <div class="container">
         <div class="row">
             <div class="col-sm-6">
                 <h1>Welcome user!!</h1>
             </div>
         </div>
     </div>
 </section><!--/#title-->

<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <a href="ngolist.php"><button id="sub" class="btn btn-success btn-md btn-block" name="ngoinfo">NGOs Info</button><br></a>
    </div>
    <div class="col-sm-4">
      <a href="#"><button id="sub" class="btn btn-success btn-md btn-block" name="addngo">Add NGOs</button><br></a>
    </div>
    <div class="col-sm-4">
        <a href="logout.php"><button id="sub" class="btn btn-success btn-md btn-block" name="logout">Logout</button><br></a>
    </div>
  </div>
</div>




<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2018 <a target="_blank" >VOID</a>. All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
