</<?php
session_start();
require_once("db.php");
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

      * {
        box-sizing: border-box;
      }


      /* Position text in the middle of the page/image */
      .bg-text {
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        color: skin-green;
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
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width: 1000px;
          position: relative;
          margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
        }

        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }


        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 0.5s;
          animation-name: fade;
          animation-duration: 80s;
        }

        @-webkit-keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }

        @keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
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
  <body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])){
              ?>
              <li><a href="user/dashboard.php" style="text-decoration:none; color:white;"><i class="fa fa-dashcube"></i>Dashboard</a></li>
              <li><a href="logout.php" style="text-decoration:none; color:white;" ><i class="fa fa-fw fa-user"></i>Logout</a></li>
              <?php
         } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
             ?>
             <li><a href="company/dashboard.php" style="text-decoration:none; color:white;"><i class="fa fa-dashcube"></i>Dashboard</a></li>
             <li><a href="logout.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Logout</a></li>
             <?php }   else{
         ?>
         <li><a href="company.php" style="text-decoration:none; color:white;"><i class="fa fa-bandcamp"></i>Company</a></li>
         <li><a href="register.php" style="text-decoration:none; color:white;"><i class="fa fa-plus-square"></i></i>Register</a></li>
         <li><a href="login.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Login</a></li>
         <li><a href="aboutus.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-envelope"></i> About Us</a></li>
       <?php } ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Job-Search.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Job-Search1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="job.png" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


	<section>
	  <div class="container-fluid">
	    <div class="row">
		  <div >
        <?php
        if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])){
            ?>
            <div class="jumbotron text-center">
              <<div class="bg-text">
              <h2>Welcome to our society!</h2>
            <p><a class="btn btn-primary btn-lg" href="user/dashboard.php" role="button" ><i class="fa fa-dashcube"></i>Dashboard</a></p>
            <div>
            <?php
       } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
           ?>
           <div class="jumbotron text-center">
             <div class="bg-text">
             <h2>Welcome to our society!</h2>
           <p><a class="btn btn-primary btn-lg" href="company/dashboard.php" role="button" ><i class="fa fa-dashcube"></i>Dashboard</a></p>
            </div>
           <?php }   else{
       ?>
       <div class="jumbotron text-center">
         <div class="bg-text">
         <h2>Create an account to become a member of our society!!!</h2>
       <p><a class="btn btn-primary btn-lg" href="register.php" role="button"><i class="fa fa-plus-square"></i>Register</a></p>
       </div>
     </div>
     <?php } ?>
		  </div>
		</div>
	  </div>
	</section>

	<!--Latest Job Post-->
	  <section>
	    <div class="container">
		  <div class="row">
		    <h2 class="text-center">Latest Job Post</h2>
          <?php
          $sql="SELECT * FROM job_post Order By Rand() Limit 4";
          $result=$conn->query($sql);

          if($result->num_rows>0){
            //output data
            while($row=$result->fetch_assoc())
            {
             ?>
             <div class="col-md-6 fixHeight" >
				        <h3><?php echo $row['jobtitle']; ?></h3>
				        <p><?php echo $row['description']; ?></p>
				        <a class="btn btn-success"><?php echo $row['maximumsalary']; ?></a>
			       </div>
            <?php
           }
         }
         ?>
		     </div>
		   </div>
	  </section>

	<!--Company List-->
	<section>
	  <div class="container">
	    <div class="row">
		<h2 class="text-center">Company List</h2>

    <?php
    $sql="SELECT ProPic FROM company Order By Rand() Limit 4";
    $result=$conn->query($sql);

    if($result->num_rows>0){
      //output data
      while($row=$result->fetch_assoc())
      {
       ?>
       <div class="row">
        <div class="col-xs-3 col-md-3">
          <div class="thumbnail">
            <img src="company/PC/<?php echo $row['ProPic'] ?>" alt="company/PC/<?php echo $row['ProPic'] ?>" title="company/PC/<?php echo $row['ProPic'] ?>"
          </div>
        </div>
      </div>
      <?php
     }
   }
   ?>
		</div>
	  </div>
	</section>

  <!-- /.content-wrapper -->

  <footer class="main-footer" style="text-decoration:none; color:white;">
    <div class="topnav">
    <div class="text-center">
      <strong><i class="fa fa-copyright" style="font-size:18px;color:black"></i>NART's Co.</strong> All rights reserved.
    </div>
  </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

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

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
      </script>
  </body>
</html>
