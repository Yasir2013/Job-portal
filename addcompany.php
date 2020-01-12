<?php
session_start();
require_once("db.php");

//clicking register button
if(isset($_POST)){
	//escape special charecters in the first string
	$companyname=mysqli_real_escape_string($conn, $_POST['companyname']);
	$headofficecity=mysqli_real_escape_string($conn, $_POST['headofficecity']);
	$contactno=mysqli_real_escape_string($conn, $_POST['contactno']);
  $website=mysqli_real_escape_string($conn, $_POST['website']);
  $companytype=mysqli_real_escape_string($conn, $_POST['companytype']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$password=mysqli_real_escape_string($conn, $_POST['password']);

	//encrypt password
	$password=base64_encode(strrev(md5($password)));

	$sql = "SELECT  email FROM company WHERE email='$email'";
	$result = $conn->query($sql);

 if($result->num_rows==0){
	$sql="INSERT INTO company(companyname,headofficecity,contactno,website,companytype,email,password) values ('$companyname', '$headofficecity', '$contactno', '$website','$companytype','$email','$password')";

		if($conn->query($sql)===True){
			$_SESSION['registrationCompleted'] =True;
			header("Location: company-login.php");
			exit();
			}else {
						echo "Error". $sql . "<br>" . $conn->error;
						}
		}
		else
			{
				$_SESSION['registrationError']= true;
				header("Location: company-register.php");
		  	exit();
			}
			$conn->close();
}
else{
	header("Location: company-register.php");
	exit();
}
?>
