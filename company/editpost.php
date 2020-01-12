<?php
session_start();
require_once("../db.php");

//clicking register button
if(isset($_POST)){

	//escape special charecters in the first string
	$jobtitle=mysqli_real_escape_string($conn, $_POST['jobtitle']);
	$description=mysqli_real_escape_string($conn, $_POST['description']);
	$minimumsalary=mysqli_real_escape_string($conn, $_POST['minimumsalary']);
	$maximumsalary=mysqli_real_escape_string($conn, $_POST['maximumsalary']);
  $experience=mysqli_real_escape_string($conn, $_POST['experience']);
  $qualification=mysqli_real_escape_string($conn, $_POST['qualification']);

	$sql="UPDATE job_post SET jobtitle='$jobtitle',description='$description',minimumsalary='$minimumsalary',maximumsalary='$maximumsalary',experience='$experience',qualification='$qualification' WHERE id_jobpost='$_POST[target_id]' AND id_company='$_SESSION[id_user]'";

		if($conn->query($sql)===TRUE){
			   $_SESSION['jobPostUpdateSuccess'] =true;
			   header("Location: view-job-post.php");
			   exit();
			}else {
						echo "Error". $sql . "<br>" . $conn->error;
			}

			$conn->close();
}
else{
	header("Location: dashboard.php");
	exit();
}
?>
