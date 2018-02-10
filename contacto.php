<?php 
$pagetitle = "Contacto";
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
	<link rel="stylesheet" href="css/contacto.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<?php include "templates/navigation.html"; ?>
	<?php include "templates/header.html"; ?>
	<!-- Content Starts Here -->
<main>
	<section class="contacto">
		<h1>Contacto</h1>
		<article class="contacto__mail">
			<h2>Mail</h2>
			<h3>clases@wuhsingchuan.com.ar</h3>
		</article>
		<article class="contacto__direccion">
			<h2>Sede Central</h2>
			<div class="contacto__direccion__datos">
				<p>Calle 6 Nº 1210 (Entre 57 y 58)</p>
				<strong>La Plata - Argentina</strong>
				<p>+54 (0221) 489-0001</p>
			</div>
			<div id="contacto__direccion__mapa"></div>
		</article>
	</section>
</main>
	<!-- Content Finish Here -->
	<?php include "templates/footer.html"; ?>
	<!-- Javascript Libraries -->
	<script src="libs/jquery-1.11.2.min.js"></script>
	<script src="libs/animatescroll.min.js"></script>
	<script src="libs/prefixfree.min.js"></script>
	<script src="js/template.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="js/maps.js"></script>
</body>
</html>