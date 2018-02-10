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
		window.location.href="http://www.wuhsingchuan.com.ar/no-soportado";
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
						<p class="description">La Asociación <strong>Wu Hsing Chuan</strong>, es una entidad dedicada al estudio, desarrollo y promoción de las auténticas artes marciales tradicionales chinas, preservando estas artes para las generaciones futuras.</p>
						<p>Los conocimientos de los antiguos maestros del arte marcial, legados de generación en generación, encuentran su cauce natural dentro de esta institución, a través de la cual, se informará sobre tales saberes a todos los amantes del verdadero <strong>Kung Fu Chino</strong>.</p>
					</div>
			</section>
			<section id="sacomani" class="content-card light">
					<div class="ccontainer">
						<h2>G.M. Neldo Sacomani</h2>
						<p class="description">El G.M. <strong>Neldo Omar Sacomani</strong>, nacido el 13 de julio de 1956, comenzó su entrenamiento formal en las artes marciales en el año 1967 a los 11 años de edad, y tras un extenso periodo de, aprendizaje que abarcó diversos sistemas y estilos. Desembocó en una vida dedicada a la investigación, desarrollo y difusión de sus queridas Artes Marciales Tradicionales del Kung Fu Chino, con la intención de preservar estas artes para las generaciones futuras.</p>
						<div class="yellow-button"><a href="sections/maestros/neldo-sacomani">Más Información</a>
						</div>
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