<?php 
$pagetitle = "Estilos";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="Escuela de kung fu tradicional Wu Hsing Chuan Argentina dirigida por el Sifu Neldo Sacomani." />
	<!-- Meta Viewport -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<base href="../">
	<!-- Title -->
	<title>Wu Hsing Chuan Argentina</title>
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
		<![endif]-->
		<!-- CSS Links -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/template.css">
		<link rel="stylesheet" href="css/estilos.css">
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="img/favicon.png">
	</head>
	<body>
		<?php include "../templates/navigation.html"; ?>
		<?php include "../templates/header.html"; ?>
		<!-- Content Starts Here -->
		<main>
			<section class="estilos">
				<article class="estilos-card" id="estilos__bak-siu-lam">
					<h2>BAK SIU LAM</h2>
					<img src="img/bak-siu-lam.png" alt="">
					<div class="estilos__fondo">
					</div>	
					<div class="estilos__link">
						<a href="#">MÁS INFORMACIÓN</a>
					</div>
				</article>
				<article class="estilos-card" id="estilos__ving-tsun">
					<h2>VING TSUN</h2>
					<img src="img/wing-chun.png" alt="">
					<div class="estilos__fondo">
					</div>
					<div class="estilos__link">
						<a href="#">MÁS INFORMACIÓN</a>
					</div>
				</article>
				<article class="estilos-card" id="estilos__hung-gar">
					<h2>HUNG GAR</h2>
					<img src="img/hung-gar.png" alt="">
					<div class="estilos__fondo">
					</div>
					<div class="estilos__link">
						<a href="#">MÁS INFORMACIÓN</a>
					</div>
				</article>
				<article class="estilos-card" id="estilos__pa-kua-chang">
					<h2>PA KUA CHANG</h2>
					<img src="img/pa-kua.png" alt="">
					<div class="estilos__fondo">
					</div>
					<div class="estilos__link">
						<a href="#">MÁS INFORMACIÓN</a>
					</div>
				</article>
				<article class="estilos-card" id="estilos__tai-chi-chuan">
					<h2>TAI CHI CHUAN</h2>
					<img src="img/tai-chi.png" alt="">
					<div class="estilos__fondo">
					</div>
					<div class="estilos__link">
						<a href="#">MÁS INFORMACIÓN</a>
					</div>
				</article>
			</section>
		</main>
		<!-- Content Finish Here -->
		<?php include "../templates/footer.html"; ?>
		<!-- Javascript Libraries -->
		<script src="libs/jquery-1.11.2.min.js"></script>
		<script src="libs/animatescroll.min.js"></script>
		<script src="libs/prefixfree.js"></script>
		<script src="js/template.js"></script>
	</body>
	</html>