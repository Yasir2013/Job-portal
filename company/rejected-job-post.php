<?php
session_start();
require_once("../db.php");

//clicking register button
if(isset($_POST)){

	$sql="DELETE FROM apply_job_post WHERE id_jobpost='$_GET[id]' AND id_company='$_SESSION[id_user]' LIMIT 1";

		if($conn->query($sql)===TRUE){
			   $_SESSION['ApplyjobPostDeleteSuccess'] =true;
			   header("Location: appliedperson.php");
			   exit();
			}else {
						echo "Error". $sql . "<br>" . $conn->error;
			}

			$conn->close();
}
else{
	header("Location: appliedperson.php");
	exit();
}
?>
