<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username_admin'];
	$email = $_POST['email_admin'];
	$password = md5($_POST['password_admin']); // encrypt password
	
	$sql = "SELECT * FROM admin_tbl WHERE email_admin='$email'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		echo "<script>alert('Woops! Email Already Exists.')</script>";
	} else {
		$sql = "INSERT INTO admin_tbl (username_admin, email_admin, password_admin)
		VALUES ('$username', '$email', '$password')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<script>alert('Wow! User Registration Completed.')</script>";
			$username = "";
			$email = "";
			$_POST['password_admin'] = "";
			header("Location: index.php");
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form </title>
</head>
<body  style="background-image: 2.jpg;">
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Pendaftaran</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username_admin" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email_admin" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password_admin" value="<?php echo $_POST['password_admin']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Daftar Sekarang</button>
			</div>
			<p class="login-register-text">Sudah memiliki akun? <a href="index.php">Login</a></p>
		</form>
	</div>
</body>
</html>
