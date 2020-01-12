<?php
  session_start();
  if(empty($_SESSION['id_user'])){
    header("Location: ../index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
        <style>
          body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
          }

          * {
            box-sizing: border-box;
          }

          .bg-image {
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }

          /* Images used */
          .img1 { background-image: url("xYyk.jpg"); }


          /* Position text in the middle of the page/image */
          .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            font-size: 80px;
            border: 10px solid #f1f1f1;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 300px;
            padding: 20px;
            text-align: center;
          }
          </style>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JOB PORTAL</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!--Navigation Bar-->
    <header>
	<nav class="navbar navbar-default">
  <div class="topnav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-home"></i>Job Portal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="topnav">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="companyprofile.php" style="text-decoration:none; color:white;"><i class="fa fa-id-badge"></i>Profile</a></li>
         <li><a href="../logout.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Logout</a></li>
       </ul>
     </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
 </nav>
</header>



  <div class="container">
    <?php if(isset($_SESSION['jobPostSuccess'])){ ?>
    <div class="row">
      <div class="alert alert-success">
        Job Post Created sucessfully!
      </div>
    </div>
  <?php  unset($_SESSION['jobPostSuccess']); }?>

  <?php if(isset($_SESSION['ApplyjobPostDeleteSuccess'])){ ?>
  <div class="row">
    <div class="alert alert-success">
      Application Post Deleted sucessfully!
    </div>
   </div>
  <?php  unset($_SESSION['ApplyjobPostDeleteSuccess']); }?>
</div>
<div class="bg-image img1"></div>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="create-job-post.php">Create Job Post</a>
    <a href="view-job-post.php">View Job Post</a>
    <a href="appliedperson.php">Applied Person</a>
  </div>
  <div class="bg-text">
    <div class="text-center">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; DASHBOARD</span>
    </div>
  </div>
  <style>
  * {box-sizing: border-box;}

    /* Style the navbar */
    .topnav {
    overflow: hidden;
    background-color: #228B22;
    }
    </style>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <s<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
