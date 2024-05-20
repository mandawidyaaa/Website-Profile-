<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="styleCv.css">
</head>
<body>

	<section class="hero" id="Home">
		<nav>
			<h1>PORTOFOLIO</h1>
			<ul>
				<li><a href="#Home">HOME</a></li>
				<li><a href="#AboutMe">ABOUT ME</a></li>
				<li><a href="#Skill">SKILL</a></li>
				<li><a href="#experience">EXPERIENCE</a></li>
				<li><a href="#education">EDUCATION</a></li>
				<li><a href="#contact">CONTACT</a></li>
			</ul>
		</nav>
		<div class="detel">
			<h1>I'm Amanda<span> Widya</span></h1>
			<p>Data Analyst</p>
		</div>
		<div class="images">
			<img src="Style1.png" class="style">
			<img src="Girl.png" class="Girl">
		</div>
	</section>
	
	<section class="AboutMe">
		<h1 id="AboutMe"> ABOUT ME</h1>
		<img src="Me.jpg" width="250px" height="333px">
		<div class="styleme">
			<div class="me">
				<p><b>Saya Amanda Widya Indah Sujatmoko, seorang Data Analyst</b> dengan keahlian dalam mengumpulkan, menganalisis dan menginterpretasikan data untuk memberikan wawasan bisnis yang berharga. Memiliki keahlian dalam menggunakan alat analisis data dan bahasa pemrograman seperti Python SQL dan Excel. Saya orang yang bertanggung jawab, mau berusaha, dan mudah bersosialisasi. Berkomitmen untuk meningkatkan kinerja bisnis dan pengambilan keputusan berdasarkan data yang akurat dan relevan.</p>
			</div>
		</div>
	</section>
	
	<section class="skill">
		<h1 id="Skill">SKILL</h1>
		<div class="styleskill">
			<div class="listskill">
				<ul>
					<li>Pemrograman Python</li>
					<li>SQL</li>
					<li>Microsoft Excel</li>
					<li>Statistika</li>
					<li>Matematika</li>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="experience">
		<h1 id="experience">EXPERIENCE</h1>
		<div class="styleexperience">
			<div class="listexperience">
				<dl>
					<dt><b>2018 - 2019</b></dt>
					<dd>Ketua Bidang Keagamaan Forum Komunikasi Yuk Muslimah</dd>
					<br><dt><b>2019 - Sekarang</b></dt>
					<dd>Bendahara Forum Komunikasi Yuk Muslimah</dd>
					<br><dt><b>2019 - 2020</b></dt>
					<dd>Anggota Bidang Kesehatan OSIS SMAN 4 Sidoarjo </dd>
					<br><dt><b>2020</b></dt>
					<dd>Bendahara Karang Taruna</dd>
					<br><dt><b>2020 - 2021</b></dt>
					<dd>Koordinator Bidang Keagamaan OSIS SMAN 4 Sidoarjo</dd>
					<br><dt><b>2021</b></dt>
					<dd>Ketua Pelaksana lomba dalam rangka bulan ramadhan SMAN 4 Sidoarjo</dd>
					<br><dt><b>2022</b></dt>
					<dd>Ketua Pelaksana kegiatan Emotional Spiritual Quotient SMAN 4 Sidoarjo</dd>
					<br><dt><b>2023</b></dt>
					<dd>Bendahara Campus Expo SMAN 4 Sidoarjo</dd>
					<br><dt><b>2023</b></dt>
					<dd>Kepala Divisi KONKES BCD</dd>
					<br><dt><b>2023</b></dt>
					<dd>Kepala Divisi KONKES Studi Ekskursi</dd>
					<br><dt><b>2023-2024</b></dt>
					<dd>Anggota Bidang Pendidikan dan Sosial UKMPK UPN "Veteran" Jawa Timur</dd>
				</dl>
			</div>
		</div>
	</section>
	
	<section class="education">
		<h1 id="education">EDUCATION</h1>
		<div class="styleeducation">
			<div class="listeducation">
				<table border = "1" cellspacing="0"> 
					<tr>
						<th>Tahun</th>
						<th>Pendidikan</th>
					</tr>
					<?php
					$education = [
						"2010 - 2016" => "SD Cendekia",
						"2016 - 2019" => "SMP Negeri 1 Sidoarjo",
						"2019 - 2022" => "SMA Negeri 4 Sidoarjo",
						"2022 - Sekarang" => "Mahasiswa Aktif Informatika UPN 'Veteran' Jawa Timur"
					];
					foreach ($education as $tahun => $pendidikan) {
						echo "<tr>";
						echo "<td>" . $tahun . "</td>";
						echo "<td>" . $pendidikan . "</td>";
						echo "</tr>";
					}
					?>
				</table>
			</div>
		</div>
	</section>
	
	<section class="contact">
		<h1 id="contact">CONTACT</h1>
		<div class="stylecontact">
			<div class="listcontact">
				<dl>                            
					<br><dt><b>Phone</b></dt>
					<dd><a href="https://wa.me/081232928224"> 081232928224 </a></dd>
					<br><dt><b>Instagram</b></dt>
					<dd><a href="https://www.instagram.com/mandawidyaaa/">@mandawidyaaa</a></dd>
					<br><dt><b>Gmail</b></dt>
					<dd><a href="https://mail.google.com/">amandawidya476@gmail.com</a></dd>
				</dl>
			</div>
		</div>
		<div class="footer">
			<div class="container"> 
				<h3>&copy; Copyright by Amanda Widya Indah Sujatmoko</h3>
			</div>
		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
	<script>
		$(document).ready(function(){

			$("body").click(function(){
				// Check if navbar is visible
				if ($("nav").is(":visible")) {
					// If visible, hide navbar with slide up animation
					$("nav").slideUp("1000");
				} else {
					// If not visible, show navbar with slide down animation
					$("nav").slideDown("1000");
				}
			});

		});
	</script>

</body>
</html>
