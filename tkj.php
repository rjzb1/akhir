<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tkj</title>
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
<img src="jurusan/tkj.png">
<center><h2>Kompetensi Teknik Komputer Dan Jaringan</h2></center>
<center><h4>TEKNIK KOMPUTER DAN JARINGAN</h4></center>
<p>Teknik Komputer dan Jaringan (TKJ) adalah salah satu bidang keahlian yang menekankan pada pengembangan dan penerapan teknologi informasi dan komunikasi (TIK) dalam berbagai aspek kehidupan. Dalam TKJ, siswa belajar tentang instalasi, konfigurasi, pemeliharaan, dan troubleshooting sistem komputer, serta jaringan komputer.
Dalam laboratorium TKJ, siswa diperkenalkan dengan komponen-komponen perangkat keras komputer, seperti motherboard, CPU, RAM, dan hard disk, serta belajar cara merakit dan memperbaiki komputer. Mereka juga mempelajari tentang sistem operasi, manajemen file, dan penggunaan perangkat lunak aplikasi kantor.
Selain itu, siswa TKJ juga diajarkan tentang jaringan komputer, mulai dari konsep dasar jaringan hingga konfigurasi dan manajemen jaringan lokal (LAN) dan jaringan luas (WAN). Mereka mempelajari tentang protokol komunikasi, topologi jaringan, dan keamanan jaringan untuk melindungi data dan informasi penting.
Dengan pengetahuan dan keterampilan yang diperoleh dari TKJ, siswa dapat mempersiapkan diri untuk bekerja di berbagai bidang yang membutuhkan keahlian dalam teknologi informasi, seperti teknisi komputer, administrator jaringan, pengembang perangkat lunak, atau ahli keamanan informasi. Teknik Komputer dan Jaringan menjadi salah satu bidang yang sangat relevan dan diminati dalam era digital saat ini.</p>
<center><h4>VISI</h4></center>
<p>"Menjadi pusat unggulan dalam pendidikan dan pengembangan sumber daya manusia di bidang Teknik Komputer dan Jaringan, yang mampu bersaing dan berkontribusi dalam dunia industri teknologi informasi secara global."</p>
<center><h4>MISI</h4></center>
<p>1. Menyediakan pendidikan berkualitas tinggi dalam bidang Teknik Komputer dan Jaringan yang mengikuti perkembangan teknologi informasi terkini.</p>
<p>2. Mengembangkan keterampilan praktis dan teoritis siswa dalam merakit, mengonfigurasi, dan memelihara perangkat keras dan perangkat lunak komputer.</p>
<p>3. Mendukung pengembangan keterampilan siswa dalam merancang, mengimplementasikan, dan mengelola jaringan komputer yang aman dan handal.</p>
<center><h4>TENAGA PENDIDIK</h4></center>
</div>
<div class="guru">
<section class="pendidik">
	
	<img src="herul.jpg" alt="herul">
	<div class="content1">
	<h1>Pak Herul</h1>
	<p>kepala program TKJ</p>
	</div>
	<img src="vicky.jpg" alt="vicky">
	<div class="content2">
	<h1>Bu Vicky</h1>
	<p>Guru B.Ing</p>
	</div>
</section>
</div>
<?php include 'footer.php' ?>
</body>
</html>