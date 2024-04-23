<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>akp</title>
	<style>

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.tkj  img {
	width: 400px;
    height: 300px;
    margin-top: 100px;
    margin-left: 480px; 
}

.tkj h2 {
	font-family: "times new roman", times, serif;
	margin-top: 30px;
}

.tkj h4 {
	font-family: sans-serif;
	margin-top: 30px;
	color: #808080;
}

.tkj p {
	text-align: justify;
	line-height: 30px;
	margin-inline: 170px;
	margin-top: 15px;
}

.pendidik {
 display: grid;
    gap: 0;
    grid-auto-rows: 420px;
    grid-template-columns: repeat(2, 0fr);
    justify-content: center;
    align-items: center;
    justify-items: center;
}

.guru img {
	width: 400px;
	height: 400px;
}

.content1 {
	width: 400px;
    height: 400px;
    top: 1068px;
    left: 275px;
    position: absolute;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity: 0;
    transition: 0.6s;
}

.content1:hover {
	opacity: 1;
}

.content1 h1 {
	font-size: 40px;
	color: white;
	margin-bottom: 15px;
}

.content1 p {
	font-size: 15px;
	color: white;
}


.content2 {
	width: 400px;
    height: 400px;
    top: 1068px;
    left: 675px;
    position: absolute;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity: 0;
    transition: 0.6s;
}

.content2:hover {
	opacity: 1;
}

.content2 h1 {
	font-size: 40px;
	color: white;
	margin-bottom: 15px;
}

.content2 p {
	font-size: 15px;
	color: white;
}




	</style>
</head>
<body>
<?php include 'navigation.php'?>
<div class="tkj">
<img src="jurusan/akp.png">
<center><h2>Kompetensi Akomodasi Perhotelan</h2></center>
<center><h4>AKOMODASI PERHOTELAN</h4></center>
<p>Jurusan Akomodasi Perhotelan adalah program pendidikan yang menawarkan pelatihan dalam manajemen dan operasi industri perhotelan. Program ini bertujuan untuk mempersiapkan siswa untuk karier di berbagai bidang dalam industri perhotelan, termasuk manajemen hotel, manajemen restoran, manajemen perjalanan dan pariwisata, dan layanan pelanggan.</p>
<center><h4>VISI</h4></center>
<p>"Menjadi pusat unggulan dalam pendidikan dan pengembangan sumber daya manusia di bidang Akomodasi Perhotelan, yang menghasilkan profesional perhotelan yang berkualitas, inovatif, dan berkompeten di tingkat nasional dan internasional."</p>
<center><h4>MISI</h4></center>
<p>1. Memberikan pendidikan berkualitas tinggi dalam bidang Akomodasi Perhotelan yang mencakup pemahaman mendalam tentang manajemen operasional hotel, layanan pelanggan, dan praktik terbaik dalam industri perhotelan. </p>
<p>2. Mendorong pengembangan keterampilan praktis siswa melalui pelatihan langsung di hotel, restoran, dan fasilitas perhotelan lainnya untuk memperkuat pemahaman teoritis dengan pengalaman praktis. </p>
<p>3. Menyediakan lingkungan pembelajaran yang kondusif dan fasilitas yang memadai untuk mendukung simulasi situasi dunia nyata dan praktikum dalam industri perhotelan.</p>
<center><h4>TENAGA PENDIDIK</h4></center>
</div>
<div class="guru">
<section class="pendidik">
	
	<img src="mirna.jpg" alt="mirna">
	<div class="content1">
	<h1>Bu Mirna</h1>
	<p>Guru</p>
	</div>
	<img src="kamil.jpg" alt="kamil">
	<div class="content2">
	<h1>Pak Kamil</h1>
	<p>Guru</p>
	</div>
</section>
</div>
<?php include 'footer.php' ?>
</body>
</html>