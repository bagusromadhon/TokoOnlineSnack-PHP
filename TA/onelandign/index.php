<?php 
include '../koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>complete responsive website design</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<header>
		<a href="" class="logo">snack<span>.</span></a>
		<div class="menuToggle" onclick="toggleMenu();"></div>
		<ul class="navigation">
			<li><a href="#banner" onclick="toggleMenu();"> Home</a></li>
			<li><a href="#about"onclick="toggleMenu();"> About</a></li>
			<li><a href="#menu"onclick="toggleMenu();"> Menu</a></li>
			<li><a href="#expert"onclick="toggleMenu();"> Expert</a></li>
			<li><a href="#testimonials"onclick="toggleMenu();"> Testimonials</a></li>
			<li><a href="#contact"onclick="toggleMenu();"> contact</a></li>
		</ul>
	</header>
<section class="banner" id="banner">
	<div class="content">
		<h2>Always Support Me</h2>
		<p>selalu belanja di snack online barang baeang bagus ber akal  </p>
		<a href="../index.php" class="btn">Belanja Sekarang</a>
	</div>
	</section>

<section class="about" id="about">
	<div class="row">
		<div class="col50">
			<h2 class="titleText"><span>A</span>bout Us</h2>
			<p>web ini tentang memebelanjakan snack , kami mengambil snack lokal yang sehat dan szudah di uji oleh para mui terjamin.</p><br><br>snca kami selalu ter update, enak
			dan lezat rasanya ,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="col50">
			<div class="imgBx">
				<img src="img1.jpg
		">	</div>
	</div>
</div>
</section>


<section class="menu" id="menu">
	<div class="title">
				<h2 class="titleText">Contoh <span>M</span>enu Kami</h2>
				<p>ini contoh menu kami </p>
			</div>
			<div class="content">


				<div class="box">
					<div class="imgBx">
						<img src="menu1.jpg">
					</div>
					<div class="text">
						<h3>Salads buah </h3>
					</div>
				</div>
		



				<div class="box">
					<div class="imgBx">
						<img src="menu2.jpg">

					</div>
					<div class="text">
						<h3>Soup special</h3>
					</div>
				</div>
		




				<div class="box">
					<div class="imgBx">
						<img src="menu3.jpg">

					</div>
					<div class="text">
						<h3>Special Pasta</h3>
					</div>
				</div>
		


							<div class="box">
					<div class="imgBx">
						<img src="kues.jpg">

					</div>
					<div class="text">
						<h3>kue kering</h3>
					</div>
				</div>
			
		


				<div class="box">
					<div class="imgBx">
						<img src="brownis.jpg">

					</div>
					<div class="text">
						<h3>Brownis </h3>
					</div>
				</div>

		



				<div class="box">
					<div class="imgBx">
						<img src="pentolbakar.jpg">

					</div>
					<div class="text">
						<h3>Pentol Bakar</h3>
					</div>
				</div>

							<div class="box1">
				 			
					 			<div class="imgBox">
					 				<img src="alfukat.jpg">
					 			</div>
					 			
					 					<div class="details">
					 						<div class="content">
								 				<h2>what is lorem ipsum?</h2>
								 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								 				consequat. Duis aute</p>
								 				</div>
							 				</div>
				 				</div>

			</div>
			
				<div class="title">
				<a href="#" class="btn"> Belanja sekarang buruan !!!</a>
				</div>



</section>

<section class="expert" id="expert">
<div class="title">
	<h2 class="titleText"> Cheff kami <span>E</span>xpert</h2>
				<p>telah di uji coba oleh master cheff indonesia pilihan terbaik,</p>
		</div>	
		<div class="content">	
				<div class="box">	
					<div class="imgBx">	
						<img src="expert1.jpg">
					</div>
					<div class="text">	
						<h3>Someone Famous</h3>
					</div>		
				</div>	
				
				<div class="box">	
					<div class="imgBx">	
						<img src="expert2.jpg">
					</div>
					<div class="text">	
						<h3>Someone Famous</h3>
					</div>		
				</div>
				<div class="box">	
					<div class="imgBx">	
						<img src="expert3.jpg">
					</div>
					<div class="text">	
						<h3>Someone Famous</h3>
					</div>		
				</div>
				<div class="box">	
					<div class="imgBx">	
						<img src="expert4.jpg">
					</div>
					<div class="text">	
						<h3>Someone Famous</h3>
					</div>		
				</div>

		</div>	

</section>
<section class="testimonials" id="testimonials">
	<div class="title white">	
 		<h2 class="titleText">They <span>S</span> About Us</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
	</div>	
		<div class="content">	
				<div class="box">	
						<div class="imgBx">	
								<img src="testis1.jpg">
						</div>	
						<div class="text">	
							<h3>Cheff ririn marinka  </h3>
							<p>makanan nya sangat enak , bersih dan murah cocok untuk kalangan menengah </p>
							<h3>Someone Famous </h3>

						</div>	
				</div>	

				<div class="box">	
						<div class="imgBx">	
								<img src="testis2.jpg">
						</div>	
						<div class="text">	
							<h3>Cheff Arnold</h3>
							<p>Makanan cukup enak dengan kadar minyak yang cukup rendah cocok untuk diet,</p>
							<h3>Someone Famous </h3>
							
						</div>	
		
				</div>	
				<div class="box">	
						<div class="imgBx">	
								<img src="testis3.jpg">
						</div>	
						<div class="text">	
							<h3>Cheff Renata</h3>
							<p>makanan nya cukup enak tidak manis tidak pait tengah2 an </p>
							<h3>Someone Famous </h3>
							
						</div>	
				</div>	
		</div>	
</section>	


</section>
<section class="contact" id="contact">
	<div class="title">	
 		<h2 class="titleText"><span>H</span>ubungi kami <span>:)</span></h2>
 		<p>Hubungi kami jika ada masalah ,terima kasih </p>
	</div>	
	<form method="post">
	<div class="contactForm">
		<h3>Kirim keluh kesah</h3>
		<div class="inputBox">
			<input type="text" name="nama" placeholder="Name">
		</div>
		<div class="inputBox">
			<input type="text" name="email" placeholder="Email">
		</div>
		<div class="inputBox">
			<textarea name="kesah" placeholder="keluh kesah"></textarea>
		</div>
		<div class="inputBox">
			<button name="submit" type="submit" value="Send">send</button>
		</div>
		<div class="keterangan">
			<h2>JL.<span>S</span>upriadi No 1C</h2>
		</div>
	</div>
	<?php 
	if (isset($_POST['submit'])) 
	{
	$koneksi->query("INSERT INTO keluh_kesah (nama,gmail,keluh) VALUES 
		('$_POST[nama]','$_POST[email]','$_POST[kesah]')");
	echo "<script>alert('keluh kesah tealh di sampaikan  ');</script>";
	echo "<script>location='index.php';</script>";
	}
	 ?>
	</form>
</section>



<div class="copyrightText">
	<p>Coppyright 2020 <a href="#">Onine Tutorials</a>. All right Reserved</p>
</div>






	<script type="text/javascript">
		window.addEventListener('scroll',function(){
			const header = document.querySelector('header');
			header.classList.toggle("sticky",window.scrollY > 0);

		});
		function toggleMenu(){
			const menuToggle = document.querySelector('.menuToggle');
		const navigation = document.querySelector('.navigation');
		menuToggle.classList.toggle('active');
		navigation.classList.toggle('active');
		}
	</script>
</body>
</html>