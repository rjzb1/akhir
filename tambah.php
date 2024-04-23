<?php

require 'config.php';

if (isset($_POST['submit'])) {
	
	if (tambah($_POST) > 0) {
		echo "data berhasil ditambahkan";
	} else {
		echo "data gagal ditambahkan";
	}


}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah data</title>
</head>
<body>
<?php include 'navigation.php' ?>
<h1>tambah data</h1>


<form action="config.php" method="post"></form>
	<ul>
		<li>
			<label for="foto_guru">foto :</label>
			<input type="file" name="foto_guru" id="foto_guru"> 
		</li>
		<li>
			<label for="teks_guru">teks :</label>
			<input type="text" name="teks_guru" id="teks_guru">
		</li>
		<li>
			<button type="submit" name="submit">tambah data</button>
		</li>
	</ul>

<?php include 'footer.php'?>
</body>
</html>