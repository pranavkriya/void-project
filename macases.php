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
    <title>HOPE | Authority</title>
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
                  <li class="active"><a href="macases.php">Cases Info</a></li>
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
                 <h1>Pending Cases in <?php echo $row['city']; ?></h1>
             </div>
         </div>
     </div>
 </section><!--/#title-->

<?php
$city = $row['city'];
$query = mysql_query("SELECT * from ngo where city='$city'");
while($res = mysql_fetch_assoc($query)){
  $ngoid = $res['ngoid'];
  $q = mysql_query("SELECT * from child where ngoid='$ngoid'");
  while($get = mysql_fetch_assoc($q)){
  $kid = $get['kid'];
    //echo $kid;
    $cases = mysql_query("SELECT * from cases where kid='$kid'");
    while($fetch=mysql_fetch_assoc($cases)){
      if($fetch){
        ?>
        <br><br>
        <div class="container">
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
              <p><strong>Case ID : </strong><?php echo $fetch['caseid']; ?></p>
              <p><strong>Kid ID : </strong><?php echo $fetch['kid']; ?></p>
              <p><strong>NGO ID : </strong><?php echo $ngoid; ?></p>
            </div>
            <div class="col-sm-4">
              <p><strong>Date of Hearing : </strong><?php echo $fetch['date_of_hearing']; ?></p>
              <p><strong>Case Details : </strong><?php echo $fetch['case_info']; ?></p>
            </div>
            <div class="col-sm-2"></div>
          </div>
        </div>
        <hr width="70%">
        <?php
        }else{
        ?>
        <center><h2>No cases are pending.</h2></center>
        <?php
        }
  }
}
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

 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.prettyPhoto.js"></script>
 <script src="js/main.js"></script>
 </body>
 </html>
