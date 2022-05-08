<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>complete responsive website design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	>
	<header>
		
		<a href="" class="logo">snack<span>.</span></a>
		<div class="menuToggle" onclick="toggleMenu();"></div>
		<ul class="navigation">
			<li><a href="index.php" onclick="toggleMenu();"> Home</a></li>
			<li><a href="keranjang.php"onclick="toggleMenu();"> keranjang</a></li>
			<?php if (isset($_SESSION["pelanggan"])):?>
			<li><a href="logout.php"onclick="toggleMenu();"> logout</a></li>
			<li><a href="riwayat.php"onclick="toggleMenu();"> riwayat</a></li>
			<?php else: ?>
			<li><a href="login.php"onclick="toggleMenu();"> login</a></li>
			<?php endif?>
			<li><a href="checkout.php"onclick="toggleMenu();"> checkout</a></li>
			<li>
		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword">
			<button class="btn btn-primary">Cari</button>
		</form>
		</li>
		</ul>
	</header>

	<script type="text/javascript">
		window.addEventListener('scroll',function(){
			const header = document.querySelector('header');
			header.classList.toggle("sticky",window.scrollY > 0);

		});
		
	</script>

</body>
</html>