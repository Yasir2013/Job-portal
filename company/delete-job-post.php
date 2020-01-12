<?php
session_start();
require_once("../db.php");

//clicking register button
if(isset($_POST)){

	$sql="DELETE FROM job_post WHERE id_jobpost='$_GET[id]' AND id_company='$_SESSION[id_user]'";

		if($conn->query($sql)===TRUE){
			   $_SESSION['jobPostDeleteSuccess'] =true;
			   header("Location: view-job-post.php");
			   exit();
			}else {
						echo "Error". $sql . "<br>" . $conn->error;
			}

			$conn->close();
}
else{
	header("Location: view-job-post.php");
	exit();
}
?>
