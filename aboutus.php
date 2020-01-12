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
      * {
        box-sizing: border-box;
      }

      body {
        margxin: 0;
        font-family: Arial;
        font-size: 17px;
      }

      .container {
        position: relative;
        max-width: 1000px;
        margin: 0 auto;
      }

      .container img {vertical-align: middle;}

      .container .content {
        position: absolute;
        bottom: 0;
        background: rgb(0, 0, 0); /* Fallback color */
        background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
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
              <li><a href="user/dashboard.php" style="text-decoration:none; color:white;">Dashboard</a></li>
              <li><a href="logout.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Logout</a></li>
              <?php
         } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
             ?>
             <li><a href="company/dashboard.php" style="text-decoration:none; color:white;"><i class="fa fa-dashcube"></i>Dashboard</a></li>
             <li><a href="logout.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Logout</a></li>
             <?php }   else{
         ?>
         <li><a href="company.php" style="text-decoration:none; color:white;"><i class="fa fa-bandcamp"></i>Company</a></li>
         <li><a href="register.php" style="text-decoration:none; color:white;"><i class="fa fa-plus-square"></i>Register</a></li>
         <li><a href="login.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Login</a></li>
         <li><a href="aboutus.php"style="text-decoration:none; color:white;" ><i class="fa fa-fw fa-envelope"></i> About Us</a></li>
       <?php } ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
  </nav>
</header>

<div class="container">
<img src="notebook.jpg" alt="Notebook" style="width:175%;">
<div class="content">
        <p><a href="aboutus.php" style="font-size:20px; color:black;">About Us</a></p>
        <br></br>
			  <h2>Job Portal-'Find Your Dream Job'</h2>
        <p> ...is a global online employment solution for people seeking jobs and the employers who need great people.Now-a-days the era is so developed.That's why job portal is so much necessary.This is made a group of students from BAUST.</p>
        <p><br><a href="https://www.facebook.com/iamashik.khan"style="font-size:20px; color:black;">Ashik Khan</a></br></p>
        <p>L-4 T-1</p>
        <h4>Student,B.Sc. Engineering in Computer Science & Engineering,</h4>
        <p>Bangladesh Army University of Science & Technology</p>
        <p><br><a href="https://www.facebook.com/rakibul.hasan.543792"style="font-size:20px; color:black;">Rakibul Hasan</a></br></p>
        <p>L-4 T-1</p>
        <h4>Student,B.Sc. Engineering in Computer Science & Engineering,</h4>
        <p>Bangladesh Army University of Science & Technology</p>
        <p><br><a href="https://www.facebook.com/tanvirmahmud.8" style="font-size:20px; color:black;">Tanvir Mahmud</a></br></p>
        <p>L-4 T-1</p>
        <h4>Student,B.Sc. Engineering in Computer Science & Engineering,</h4>
        <p>Bangladesh Army University of Science & Technology</p>
        <p><br><a href="https://www.facebook.com/shahriar.niloy.773" style="font-size:20px; color:black;">Munem Shahriar Niloy</a></br></p>
        <p>L-4 T-1</p>
        <h4>Student,B.Sc. Engineering in Computer Science & Engineering,</h4>
        <p>Bangladesh Army University of Science & Technology</p>
        <p></p>
        <h2><br>Contact Us At</br></h2>
        <p><a class="btn btn-success btn-lg" role="button">aasshhik98@gmail.com</a></p>
        <p><a class="btn btn-success btn-lg" role="button">hasanrakibul77@gmail.com</a></p>
        <p><a class="btn btn-success btn-lg" role="button">mahmudtanvir30@gmail.com</a></p>
        <p><a class="btn btn-success btn-lg" role="button">shahriarniloy012@gmail.com</a></p>
		  </div>
    </div>

	<!--Latest Job Post-->
	  <section>
	    <div class="container">
		  <div class="row">
		    <h2 class="text-center">Latest Job Post</h2>
          <?php
          $sql="SELECT * FROM job_post Order By Rand() Limit 2";
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

    <script type="text/javascript">
     $(function() {
       var maxHeight= 0;

       $(".fixHeight").each(function(){
         maxHeight=($(this).height() > maxHeight ? $(this).height() : maxHeight);
       });
       $(".fixHeight").height(maxHeight);
     });
    </script>
  </body>
</html>
