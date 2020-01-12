<?php
  session_start();
  require_once("../db.php");

  //if user click the update button
if(isset($_POST['btnsave']))

  {

    $max_size = 20971520;
 	  $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    if($file_size > $max_size){
        echo "Flie size is exceeds the limit";
        exit();
    }
    $file_type = $_FILES['file']['type'];
    $folder="";
 if(move_uploaded_file($file_loc,$folder.$file))
 {
  $sql="UPDATE users SET Resume='$file' WHERE id_user='$_SESSION[id_user]'";
  mysql_query($sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='dashboard.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='dashboard.php?fail';
        </script>
  <?php
 }
}
?>
