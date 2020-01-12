<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "jobportal";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
  die("Connection Failed: ". $conn->connect_error);
}
 ?>
