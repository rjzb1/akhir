<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>otkp</title>
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
<img src="jurusan/otkp.png">
<center><h2>Kompetensi Otomatisasi dan Tata Kelola Perkantoran</h2></center>
<center><h4>OTOMATISASI DAN TATA KELOLA PERKANTORAN</h4></center>
<p>Jurusan OTKP (Otomatisasi dan Tata Kelola Perkantoran) merupakan salah satu pilihan jurusan di tingkat Sekolah Menengah Kejuruan (SMK) yang menawarkan pendidikan dalam bidang administrasi perkantoran dengan pemanfaatan teknologi modern. Siswa jurusan OTKP akan memperoleh pengetahuan dan keterampilan yang diperlukan untuk mengelola tugas administratif di berbagai jenis organisasi.
Dalam program pendidikan OTKP, siswa akan belajar tentang berbagai aspek administrasi perkantoran, termasuk pengelolaan dokumen, penataan arsip, pengelolaan waktu, dan penyusunan laporan. Mereka juga akan diperkenalkan dengan teknologi informasi dan komunikasi serta perangkat lunak aplikasi perkantoran yang umum digunakan dalam lingkungan kantor.</p>
<center><h4>VISI</h4></center>
<p>"Menjadi pusat unggulan dalam pendidikan dan pengembangan sumber daya manusia di bidang Otomatisasi dan Tata Kelola Perkantoran, yang menghasilkan lulusan yang profesional, kompeten, dan mampu beradaptasi dengan perkembangan teknologi informasi dan komunikasi."</p>
<center><h4>MISI</h4></center>
<p>1. Memberikan pendidikan berkualitas tinggi dalam bidang Otomatisasi dan Tata Kelola Perkantoran yang mengikuti perkembangan teknologi dan kebutuhan industri.</p>
<p>2. Mengembangkan keterampilan praktis dan teoritis siswa dalam penggunaan perangkat lunak aplikasi perkantoran dan teknologi informasi terkini.</p>
<p>3. Mendorong pengembangan soft skills seperti kemampuan komunikasi, kepemimpinan, dan kerjasama tim dalam lingkungan kerja.</p>
<center><h4>TENAGA PENDIDIK</h4></center>
</div>
<div class="guru">
<section class="pendidik">
	
	<img src="aep.jpg" alt="aep">
	<div class="content1">
	<h1>Mr. aep</h1>
	<p>kepala program OTKP</p>
	</div>
	<img src="iim.jpg" alt="iim">
	<div class="content2">
	<h1>Bu Iim</h1>
	<p>Guru PAI</p>
	</div>
</section>
</div>

<?php include 'footer.php' ?>
</body>
</html>