<?php 

// include('login/config.php');

session_start();

error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: hi.php");
// }

// if (isset($_POST['submit'])) {
// 	$username = $_POST['username'];
// 	$password = md5($_POST['password']);

// 	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
// 	$result = mysqli_query($conn, $sql);
// 	if ($result->num_rows > 0) {
// 		$row = mysqli_fetch_assoc($result);
// 		$_SESSION['username'] = $row['username'];
// 		header("Location: hi.php");
// 	} else {
// 		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
// 	}
// }

?>
<?php 
include('config/constants.php');
//CHeck whether the Submit Button is Clicked or NOt
if(isset($_POST['submit']))
{
	//Process for Login
	//1. Get the Data from Login form
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//2. SQL to check whether the user with username and password exists or not
	$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

	//3. Execute the Query
	$res = mysqli_query($conn, $sql);

	//4. COunt rows to check whether the user exists or not
	$count = mysqli_num_rows($res);

	if($count==1)
	{
		//User AVailable and Login Success
		$_SESSION['login'] = "<div class='success'>Login Successful.</div>";
		$_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

		//REdirect to HOme Page/Dashboard
		header('location:'.SITEURL.'admin/');
	}
	$sql1= "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql1);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: hi.php");
	}
	else
	{
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}


}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="login/style.css">

	<title>Login Form - Kantipur Restaurant</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="login/register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>