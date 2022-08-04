<?php
include('./config/constants.php');

  $email = $_POST['email'];
	$message = $_POST['message'];

  echo $message;

    $sql = "INSERT INTO tbl_feedbacks (email, message)
        VALUES ('$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location:'.SITEURL);
      $email = "";
      $message = "";
    
    } else {
       header('Location:'.SITEURL);
    }
    header('Location:'.SITEURL);
?>