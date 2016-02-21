<?php 
$pagetitle = "Inicio";
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
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
		<![endif]-->
		<!-- CSS Links -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/template.css">
		<link rel="stylesheet" href="css/index.css">
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="img/favicon.png">
	</head>
	<body>
		<?php include "templates/navigation.html"; ?>
		<?php include "templates/header.html"; ?>
		<!-- Content Starts Here -->
		<main>
			<section id="quienes-somos" class="content-card dark">
					<div class="ccontainer">
						<h2>Nuestra Asociación</h2>
						<p>La Asociación <strong>Wu Hsing Chuan</strong>, es una entidad dedicada al estudio, desarrollo y promoción de las auténticas artes marciales tradicionales chinas, preservando estas artes para las generaciones futuras.</p>
						<p>Los conocimientos de los antiguos maestros del arte marcial, legados de generación en generación, encuentran su cauce natural dentro de esta institución, a través de la cual, se informará sobre tales saberes a todos los amantes del verdadero <strong>Kung Fu Chino</strong>.</p>
					</div>
			</section>
			<section id="sacomani" class="content-card light">
					<div class="ccontainer">
						<h2>Sifu Neldo Sacomani</h2>
						<p>El Sifu <strong>Neldo Omar Sacomani</strong>, de reconocida trayectoria en la práctica del Kung Fu Wushu, es el director de la Escuela Internacional <strong>Wu Hsing Chuan</strong>, entidad con base en la ciudad de La Plata, Argentina.</p>
						<p>Su entrenamiento en las artes marciales clásicas del Kung Fu Wushu comenzó en el año 1971. Es presidente de la Asociación de Artes Marciales Chinas Tradicionales "Wu Hsing Chuan" de Wushu Kung Fu, desde el año 1983. </p>
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