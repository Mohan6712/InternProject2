<?php

//CHeck whether the Submit Button is Clicked or NOt
if(isset($_POST['submit'])){
  $email = $_POST['email'];
	$message = $_POST['message'];

    $sql = "INSERT INTO tbl_feedbacks (email, message)
        VALUES ('$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: index.php');
      $email = "";
      $message = "";
    
    } else {
       header('Location: index.php');
    }
}
	//Process for Login
?>