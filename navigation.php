<?php

session_start();

if (!isset($_COOKIE['user_log'])) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['logout'])) {
    user_logout();
}

function user_logout() {
    setcookie("user_log", "", time() - 3600, "/");
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="navbar.css">
	<title>navigasi</title>
</head>
<body>

<header class="header">
	<img class="logo" src=logo-golden.png width="80" height="40">
	<nav class="navbar">
		<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="#">tentang kami</a>
		<ul class="dropdown">
			<li><a href="sejarah.php">Sejarah Singkat</a></li>
			<li><a href="visimisi.php">Visi dan Misi</a></li>
			<li><a href="fasilitas.php">Fasilitas</a></li>
		</ul>
	</li>
		<li><a href="guru.php">Guru</a></li>
		<li><a href="#">Jurusan</a>
		<ul class="dropdown">
			<li><a href="tkj.php">TKJ</a></li>
			<li><a href="otkp.php">OTKP</a></li>
			<li><a href="bdp.php">BDP</a></li>
			<li><a href="akp.php">AKP</a></li>
		</ul>
	</li>
		<li><a href="#">Seputar Golden</a>
	<ul class="dropdown">
			<li><a href="prestasi.php">Prestasi</a></li>
			<li><a href="event.php">Event</a></li>
		</ul>
</li><a href="?logout=true">Logout</a></ul>
	</nav>
</header>
</body>
</html>