<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bdp</title>
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
<img src="jurusan/pm.png">
<center><h2>Kompetensi Bisnis Daring Dan Pemasaran</h2></center>
<center><h4>BISNIS DARING DAN PEMASARAN</h4></center>
<p>Jurusan Pemasaran adalah salah satu jurusan yang ditawarkan di Sekolah Menengah Kejuruan (SMK) yang fokus pada pendidikan dan pelatihan dalam bidang pemasaran dan bisnis. Program ini dirancang untuk memberikan pengetahuan, keterampilan, dan pemahaman yang dibutuhkan untuk sukses dalam industri pemasaran yang dinamis dan beragam.</p>
<center><h4>VISI</h4></center>
<p>"Menjadi pusat unggulan dalam pendidikan dan pengembangan sumber daya manusia di bidang Manajemen Proyek, yang menghasilkan pemimpin proyek yang berkualitas, inovatif, dan mampu mengelola proyek-proyek kompleks dengan keberhasilan yang konsisten."</p>
<center><h4>MISI</h4></center>
<p>1. Memberikan pendidikan berkualitas tinggi dalam bidang Manajemen Proyek yang mencakup pemahaman mendalam tentang konsep, metode, dan praktik terbaik dalam manajemen proyek.</p>
<p>2. Mengembangkan keterampilan praktis siswa dalam perencanaan, pelaksanaan, dan pengendalian proyek, serta manajemen sumber daya manusia, keuangan, dan risiko yang terlibat.</p>
<p>3. Mendorong pengembangan kepemimpinan dan kemampuan kolaborasi siswa dalam bekerja dalam tim proyek lintas-fungsional untuk mencapai tujuan proyek secara efektif dan efisien.</p>
<center><h4>TENAGA PENDIDIK</h4></center>
</div>
<div class="guru">
<section class="pendidik">
	
	<img src="nurdin.jpg" alt="nurdin">
	<div class="content1">
	<h1>Pak Nurdin</h1>
	<p>kepala program BDP</p>
	</div>
	<img src="mila.jpg" alt="mila">
	<div class="content2">
	<h1>Bu Mila</h1>
	<p>Guru Bahasa Indonesia</p>
	</div>
</section>
</div>
<?php include 'footer.php' ?>
</body>
</html>