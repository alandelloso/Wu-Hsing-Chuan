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
	<!-- Title -->
	<title>Wu Hsing Chuan Argentina</title>
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.wuhsingchuan.com.ar/no-soportado";
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
		<?php include "templates/navigation.html"; ?>
		<?php include "templates/header.html"; ?>
		<!-- Content Starts Here -->
		<main>
			<section class="estilos">
				<h1>Estilos</h1>
				<div class="flex-box">
				<article class="estilos-card" id="ving-tsun-card">
					<a href="sections/estilos/ving-tsun" class="estilos-card-link">
						<h3 class="estilos-card-name">Ving Tsun</h3>
					</a>
				</article>
				<article class="estilos-card" id="hung-gar-card">
					<a href="sections/estilos/hung-gar" class="estilos-card-link">
						<h3 class="estilos-card-name">Hung Gar</h3>
					</a>
				</article>
				<article class="estilos-card" id="bak-siu-lam-card">
					<a href="sections/estilos/bak-siu-lam" class="estilos-card-link">
						<h3 class="estilos-card-name">Bak Siu Lam</h3>
					</a>
				</article>
				<article class="estilos-card">
					<a href="sections/estilos/tai-chi-chuan" class="estilos-card-link" id="tai-chi-card">
						<h3 class="estilos-card-name">Tai Chi Chuan</h3>
					</a>
				</article>
				<article class="estilos-card" id="pa-kua-card">
					<a href="sections/estilos/pa-kua-chang" class="estilos-card-link">
						<h3 class="estilos-card-name">Pa Kua Chang</h3>
					</a>
				</article>
				</div>
			</section>
		</main>
		<!-- Content Finish Here -->
		<?php include "templates/footer.html"; ?>
		<!-- Javascript Libraries -->
		<script src="libs/jquery-1.11.2.min.js"></script>
		<script src="libs/animatescroll.min.js"></script>
		<script src="libs/prefixfree.min.js"></script>
		<script src="js/template.js"></script>
	</body>
	</html>