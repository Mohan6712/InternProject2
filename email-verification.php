<?php

include './config/constants.php';
if (isset($_POST["verify_email"])) {
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    // mark email as verifieda
    $getUser = "SELECT  verificationCode FROM users WHERE email='" . $email . "'";
    //Execute the Query
    $getUserQuery = mysqli_query($conn, $getUser);

    //Count Rows
    $count = mysqli_num_rows($getUserQuery);

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($getUserQuery)) {
            $str = (string) $row['verificationCode'] ;
            if($str == $verification_code){
                $updateQuery = "UPDATE users SET isVerified='YES' WHERE email='".$email."'";
                if ($conn->query($updateQuery) === TRUE) {
                    echo "<script>alert('Verfification Success')</script>";
                    Header("Location:".$root.$basePath.'/logins.php');
                }else{
                    echo "<script>alert('Some Thing went wrong')</script>";

                }
            }else{
                echo "<script>alert('Verification code is invalid')</script>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="./login/style.css">

	<title>Login Form </title>
</head>

    <body style="background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);">
        <div class="container">
            <form action="" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Verification</p>
                    <div class="input-group">
                        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
                    </div>

                    <div class="input-group">
                        <input type="text" name="verification_code" placeholder="Enter verification code" required />
                    </div>

                    <div class="input-group">
                        <input type="submit" name="verify_email" value="Verify Email" class="btn">
                    </div>
            </form>
        </div>
    </body>

</html>
