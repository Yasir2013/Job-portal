<?php
  session_start();
  if(empty($_SESSION['id_user'])){
    header("Location: ../index.php");
    exit();
  }
  require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <li><a href="appliedperson.php" style="text-decoration:none; color:white;"><i class="fa fa-id-badge"></i>Applied Person</a></li>
        <li><a href="../logout.php" style="text-decoration:none; color:white;"><i class="fa fa-fw fa-user"></i>Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
  </nav>
</header>

<section>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 well">
      <h2 class="text-center">RESUME</h2>
       <?php
           $sql="SELECT * FROM apply_job_post INNER JOIN users ON apply_job_post.id_user=users.id_user WHERE apply_job_post.id_user='$_GET[id]' AND apply_job_post.id_jobpost='$_GET[id_jobpost]' ";
           $result=$conn->query($sql);

           if($result->num_rows > 0){
             while($row = $result->fetch_assoc()){
        ?>
       <div class="row">
        <div class="col-sm-8 col-md-10">
          <div class="thumbnail">
            <embed src="../user/uploads/<?php echo $row['Resume'] ?>" type="application/pdf" width="125%" height="600px" />
          </div>
        </div>
        <?php
      }
    }
        ?>
      </div>


     </div>
   </div>
</div>
</section>
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
