<?php
include 'masession.php';

 ?>

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
                  <li class="active"><a href="ngolist.php">NGOs Info</a></li>
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
                    <h1>NGOs</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->
<br><br>

<?php
    include 'connect.php';
    $id = $_SESSION['login_master'];
    $query = mysql_query("SELECT * from master_admin where jid='$id'");
    $result = mysql_fetch_assoc($query);
    $city = $result['city'];?>

<center><h2>NGOs belonging to <?php echo $city; ?></h2></center>
  <hr width="80%">
    <?php
    $q = mysql_query("SELECT * from ngo where city='$city'");
    while($res=mysql_fetch_assoc($q)){

      $nid = $res['ngoid'];

      $cs = mysql_query("SELECT count(*) as total_st from staff where ngoid='$nid' AND status='a'");
      $counts = mysql_fetch_assoc($cs);

      $cc = mysql_query("SELECT count(*) as total_c from child where ngoid='$nid' AND status='a'");
      $countc = mysql_fetch_assoc($cc);

      ?>
        <div class="container">
          <div class="row">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-6">
                <p><strong>Name - </strong><?php echo $res['ngoid']; ?></p>
                <p><strong>Name - </strong><?php echo $res['name']; ?></p>
                <p><strong>Address - </strong><?php echo $res['address']; ?></p>
              </div>
              <div class="col-sm-4">
                <p><strong>Child capactiy </strong><br>
                  <?php echo $countc['total_c']; ?> / <?php echo $res['capacity']; ?></p>
                <p><strong>Staff Count </strong><br>
                  <?php echo $counts['total_st']; ?> / <?php echo $res['staff_count']; ?></p>
              </div>
              <div class="col-sm-1"></div>
            </div>
          </div>
        </div>
        <hr width="80%">
      <?php
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
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
