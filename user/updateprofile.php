<?php
  session_start();
  require_once("../db.php");

  //if user click the update button
if(isset($_POST)){

  //escape
  $firstname=mysqli_real_escape_string($conn, $_POST['fname']);
  $lastname=mysqli_real_escape_string($conn, $_POST['lname']);
  $address=mysqli_real_escape_string($conn, $_POST['address']);
  $city=mysqli_real_escape_string($conn, $_POST['city']);
  $contactno=mysqli_real_escape_string($conn, $_POST['contactno']);
  $qualification=mysqli_real_escape_string($conn, $_POST['qualification']);
  $passingyear=mysqli_real_escape_string($conn, $_POST['passingyear']);
  $dob=mysqli_real_escape_string($conn, $_POST['dob']);
  $age=mysqli_real_escape_string($conn, $_POST['age']);
  $designation=mysqli_real_escape_string($conn, $_POST['designation']);

  //Update query
  $sql="UPDATE users SET firstname='$firstname', lastname='$lastname', address='$address', city='$city', contactno='$contactno', qualification='$qualification', passingyear='$passingyear',dob='$dob', age='$age', designation='$designation' WHERE id_user='$_SESSION[id_user]'";

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
