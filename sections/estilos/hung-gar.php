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
	<base href="../../">
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
	<![endif]-->
	<!-- CSS Links -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/estilo.css">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<?php include "../../templates/navigation.html"; ?>
	<?php include "../../templates/header.html"; ?>
	<!-- Content Starts Here -->
<main>
	<section class="title hung-gar-color-dark" id="hung-gar-banner">
		<h1 class="title__h1">Hung Gar</h1>
	</section>
	<section class="content-card dark informacion" id="hung-gar-info">
		<p>El Hung Gar Kuen , o Boxeo de la Familia Hung, es uno de los sistemas de Kung Fu más poderosos, en cuanto a su fortaleza, agresividad y rapidez. </p>
		<br>
		<p>Este popular sistema de Kung Fu desarrolla las habilidades que fueron enseñadas desde los tiempos del Monasterio Shaolín, en el cual se practicaban técnicas que imitaban a distintos animales, así el Hung Gar conserva este conocimiento para ser transmitido a las generaciones siguientes.</p>
	</section>
	<section class="linaje hung-gar-color content-card light">
		<h2>Linaje</h2>
		<article class="maestro">
			<h3 class="maestro__nombre">Wong Fei Hung</h3>
			<img src="img/maestros/hung-gar/wong-fei-hung.jpg" alt="Wong Fei Hung" class="maestro__foto">
		</article>
		<div class="linaje__arrow">
			<div class="linaje__arrow__c1"></div>
			<br>
			<div class="linaje__arrow__c2"></div>
			<br>
			<div class="linaje__arrow__arrow"></div>
		</div>
		<article class="maestro">
			<h3 class="maestro__nombre">Lam Sai Wing</h3>
			<img src="img/maestros/hung-gar/lam-sai-wing.jpg" alt="Lam Sai Wing" class="maestro__foto">
		</article>
		<div class="linaje__arrow">
			<div class="linaje__arrow__c1"></div>
			<br>
			<div class="linaje__arrow__c2"></div>
			<br>
			<div class="linaje__arrow__arrow"></div>
		</div>
		<article class="maestro">
			<h3 class="maestro__nombre">Lam Cho</h3>
			<img src="img/maestros/hung-gar/lam-cho.jpg" alt="Lam Cho" class="maestro__foto">
		</article>
		<div class="linaje__arrow">
			<div class="linaje__arrow__c1"></div>
			<br>
			<div class="linaje__arrow__c2"></div>
			<br>
			<div class="linaje__arrow__arrow"></div>
		</div>
		<article class="maestro">
			<h3 class="maestro__nombre">Wong Hon Keung</h3>
			<img src="img/maestros/hung-gar/wong-hon-keung.jpg" alt="Wong Hon Keung" class="maestro__foto">
		</article>
		<div class="linaje__arrow">
			<div class="linaje__arrow__c1"></div>
			<br>
			<div class="linaje__arrow__c2"></div>
			<br>
			<div class="linaje__arrow__arrow"></div>
		</div>
		<article class="maestro">
			<h3 class="maestro__nombre">Hernán Dell'Oso</h3>
			<img src="img/maestros/hung-gar/hernan-dell-oso.jpg" alt="Hernán Dell'Oso" class="maestro__foto">
		</article>
	</section>
	<section class="filiales content-card dark">
		<h2>Filiales y Horarios</h2>
		<div class="filiales-flex">
		<!--INICIO FILIAL-->
		<div class="filial">
			<h3 class="filial__titulo">Sede Central</h3>
			<img src="img/maestros/hung-gar/hernan-dell-oso.jpg" alt="Hernán Dell'Oso" class="filial__foto-instructor">
			<div class="group1">
				<h3 class="filial__sifu">Sifu Hernán Dell'Oso</h3>
				<p class="filial__horario">Sábado de 10:00 a 13:00</p>
			</div>
			<div class="group2">
				<p class="filial__direccion">Calle 6 N° 1210</p>
				<br>
				<p class="filial__localidad">La Plata - Argentina</p>
			</div>
		</div>
		<!--FIN FILIAL-->
		<!--INICIO FILIAL-->
		<div class="filial">
			<h3 class="filial__titulo">Sede Central</h3>
			<img src="img/maestros/hung-gar/gabriel-moschella.jpg" alt="Gabriel Moschella" class="filial__foto-instructor">
			<div class="group1">
				<h3 class="filial__sifu">Sihing Gabriel Moschella</h3>
				<p class="filial__horario">Lunes y Miércoles de 21:00 a 22:30</p>
			</div>
			<div class="group2">
				<p class="filial__direccion">Calle 6 N° 1210</p>
				<br>
				<p class="filial__localidad">La Plata - Argentina</p>
			</div>
		</div>
		<!--FIN FILIAL-->
		<!--INICIO FILIAL-->
		<div class="filial">
			<h3 class="filial__titulo">Sede Central</h3>
			<img src="img/maestros/hung-gar/marcelo-heredia.jpg" alt="Marcelo Heredia" class="filial__foto-instructor">
			<div class="group1">
				<h3 class="filial__sifu">Sihing Marcelo Heredia</h3>
				<p class="filial__horario">Martes y Viernes de 10:00 a 11:30</p>
			</div>
			<div class="group2">
				<p class="filial__direccion">Calle 6 N° 1210</p>
				<br>
				<p class="filial__localidad">La Plata - Argentina</p>
			</div>
		</div>
		<!--FIN FILIAL-->
		<!--INICIO FILIAL-->
		<div class="filial">
			<h3 class="filial__titulo">Filial Parque Patricios</h3>
			<img src="img/maestros/hung-gar/hernan-dell-oso.jpg" alt="Hernán Dell'Oso" class="filial__foto-instructor">
			<div class="group1">
				<h3 class="filial__sifu">Sifu Hernán Dell'Oso</h3>
				<p class="filial__horario">Martes y Jueves de 20:30 a 22:00</p>
			</div>
			<div class="group2">
				<p class="filial__direccion">Esteban de Luca 2251</p>
				<br>
				<p class="filial__localidad">C.A.B.A. - Argentina</p>
			</div>
		</div>
		<!--FIN FILIAL-->
		</div>
	</section>
</main>
	<!-- Content Finish Here -->
	<?php include "../../templates/footer.html"; ?>
	<!-- Javascript Libraries -->
	<script src="libs/jquery-1.11.2.min.js"></script>
	<script src="libs/animatescroll.min.js"></script>
	<script src="libs/prefixfree.min.js"></script>
	<script src="js/template.js"></script>
</body>
</html>