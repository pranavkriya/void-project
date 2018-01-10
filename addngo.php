<?php
include 'masession.php';
include 'addn.php';
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
                  <li><a href="ngolist.php">NGOs Info</a></li>
                  <li><a href="macases.php">Cases Info</a></li>
                  <li class="active"><a href="addngo.php">Add NGOs</a></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
          </div>
      </div>
  </header><!--/header-->


    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Add NGOs</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <?php
        include 'connect.php';
        $id = $_SESSION['login_master'];
        $query = mysql_query("SELECT * from master_admin where jid='$id'");
        $result = mysql_fetch_assoc($query);
        $city = $result['city'];
        // include 'addn.php';
        ?>

<br><br>

<div class="container">
  <section id="parent_form" class="container">
    <form class="form-horizontal" action="" method="POST">

      <div class="form-group">
            <label class="control-label col-sm-3" for="ngoid">NGO ID:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="Enter NGO Id" name="ngoid" required>
            </div>
          </div>
          <div class="form-group">
                <label class="control-label col-sm-3" for="name">Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Enter Name" name="name">
                </div>
          </div>
      <div class="form-group">
            <label class="control-label col-sm-3" for="capacity">Enter Child Capacity:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="Enter Child capacity" name="capacity">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="staff_count">Enter Staff Capacity:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="Enter Staff capacity" name="staff_count">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="city">City:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" value="<?php echo $city; ?>" name="city" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="address">Address:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="Place Address" name="address">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="status"></label>
            <div class="col-sm-6">
              <input type="hidden" class="form-control" value="a" name="status">
            </div>
          </div>
          <br>
          <div class="form-group">
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-default">Submit</button><br>
              <span><?php echo $error; ?></span>
            </div>
          </div>
    </form>
  </section>
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
