<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_COOKIE['user_log'])) {
    header("Location: home.php");
}


if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT password_admin FROM admin_tbl WHERE email_admin='$email'";
  $result = mysqli_query($conn, $sql);

  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
		$random_string = base_convert(mt_rand(1000000000, 9999999999), 10, 36);
        
    // Mengambil nilai kolom password
    $encrypt_password = $row['password_admin'];
        
    if ($encrypt_password == $password) {
      	setcookie('user_log', $random_string, time() + (86400 * 30));
				header("Location: home.php");
    } else {
        echo "<script>alert('Password Anda salah.')</script>";
    }
  } else {
    	echo "<script>alert('Email tidak ditemukan.')</script>";
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

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $_POST['email']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Tidak Memiliki Akun? <a href="registrasi.php">Daftar Disini</a></p>
		</form>
	</div>
</body>
</html>

