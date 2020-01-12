<?php
  session_start();
  require_once("../db.php");

  //if user click the update button
if(isset($_POST)){

  //escape
  $companyname=mysqli_real_escape_string($conn, $_POST['companyname']);
  $address=mysqli_real_escape_string($conn, $_POST['headofficecity']);
  $website=mysqli_real_escape_string($conn, $_POST['website']);
  $contactno=mysqli_real_escape_string($conn, $_POST['contactno']);
  $companytype=mysqli_real_escape_string($conn, $_POST['companytype']);

  //Update query
  $sql="UPDATE company SET companyname='$companyname', companytype='$companytype', headofficecity='$address', website='$website', contactno='$contactno'WHERE id_company='$_SESSION[id_user]'";

  if($conn->query($sql)===TRUE){
    header("Location: dashboard.php");
    exit();
  }else{
      echo"Error".$sql."<br>".$conn->error;
  }
  $conn->close();
}else{
  header("Location:dashboard.php");
  exit();
}
