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
		window.location.href="http://www.wuhsingchuan.com.ar/no-soportado";
		</script>
		<![endif]-->
		<!-- CSS Links -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/template.css">
		<link rel="stylesheet" href="css/maestros.css">
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="img/favicon.png">
	</head>
	<body>
		<?php include "../../templates/navigation.html"; ?>
		<?php include "../../templates/header.html"; ?>
		<!-- Content Starts Here -->
		<main class="ccontainer">
			<section class="maestro_informacion">
				<article>
					<img src="img/maestros/ving-tsun/neldo-sacomani.jpg" class="maestro_informacion_imagen">
					<h2>G.M. Neldo Sacomani</h2>
					<article class="text_delimiter">
						<p class="maestro_informacion_descripcion">El G.M. Neldo Sacomani, nacido el 13 de julio de 1956, comenzó su entrenamiento formal en las artes marciales en el año 1967 a los 11 años de edad, y tras un extenso periodo de aprendizaje que abarcó diversos sistemas y estilos, se pueden mencionar, Judo Kodokan, Karate Shotokan, Full Contact y Kung Fu Tradicional, también activamente participando en múltiples eventos, exhibiciones , muestras, torneos Nacionales e Internacionales incluso en China (categorías formas y combates) desembocó en una vida dedicada a la investigación, desarrollo y difusión de sus queridas Artes Marciales Tradicionales del Kung Fu Chino, con la intención de preservar estas artes para las generaciones futuras.</p>
						<p class="maestro_informacion_descripcion">Hoy en día cuenta con una ampliamente reconocida y vasta trayectoria, Nacional e Internacional, en la práctica del Kung Fu Wushu Tradicional. Es presidente de la Asociación Internacional de Artes Marciales Chinas Tradicionales "Wu Hsing Chuan", entidad con base en la ciudad de La Plata, Provincia de Buenos Aires, Argentina, desde su formación hasta la actualidad, con una continua, profusa y exitosa difusión de los estilos Tradicionales Chinos. Ha estudiado y desarrollado los estilos chinos tradicionales y originales: Ving Tsun, Bak Siu Lam Mun, Hung Gar, Baguazhang (junto al Xing Yi Quan), y Tai Chi Chuan (Estilos Yang y Sun). Estudió con grandes Maestros del Kung Fu de renombre internacional y personalidades reconocidas de la medicina tradicional china y Chi Kung (Laoshi Dr. Tong Zhi Hua, Sifu Maestro Li Wing Kai, Sifu Maestro Dr. Su Yu Chang, Sifu Maestro Huang Zhi Cheng, Sifu Maestro Lun Kai, Sifu Maestra Hui Yin Foon). Está acreditado como Juez Nacional de Combate y Juez en Formas Tradicionales y continúa con un permanente y fluido contacto con sus Maestros en CHINA y HONG KONG.”</p>
					</article>
				</article>
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