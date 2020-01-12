<?php
  session_start();
  if(isset($_SESSION['id_user'])){
    header("Location: user/dashboard.php");
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
      body, html {
          height: 100%;
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
      }

      .hero-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("company.png");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
      }

      .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: black;
      }

      .hero-text button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
      }

      .hero-text button:hover {
        background-color: #555;
        color: white;
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
      <a class="navbar-brand" href="index.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-home"></i>Job Portal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="topnav">
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION['id_user'])){
          ?>
          <li><a href="user/dashboard.php" style="text-decoration:none; color:white;"><i class="fa fa-dashcube"></i>Dashboard</a></li>
          <li><a href="logout.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Logout</a></li>
          <?php
        }else{ ?>
        <li><a href="company.php" style="text-decoration:none; color:white;"><i class="fa fa-bandcamp"></i>Company</a></li>
        <li><a href="company-register.php" style="text-decoration:none; color:white;"><i class="fa fa-plus-square"></i>Company Register</a></li>
      <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
  </nav>
</header>

<div class="hero-image">
  <div class="hero-text">

<section>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 well">
      <h2 class="text-center">Company Login</h2>
        <form method="post" action="checkcompanylogin.php">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
         </div >
         <div class="text-center">
           <button type="submit" class="btn btn-success">Submit</button>
         </div>
         <?php
         if(isset($_SESSION['registrationCompleted'])) {
           ?>
           <div>
             <p class="text-center">You have registered sucessfully!</p>
           </div>
         <?php
          unset($_SESSION['registrationCompleted']); }
          ?>
          <?php
          if(isset($_SESSION['loginError'])) {
            ?>
            <div>
              <p class="text-center">Invalid Email/Password!Try again.</p>
            </div>
          <?php
            unset($_SESSION['loginError']); }
            ?>
       </form>
     </div>
   </div>
</div>
</section>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <s<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
