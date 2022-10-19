<?php

$idioma;

//array idiomas
$idiomasPermitidos = array('es', 'ca');

//idioma del navegador
$idiomaNavegador = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//FALTA VER QUE HACER CON ESTO DEL IDIOMA NAVEGADOR

//detectamos cuando el usuario pulsa el enlace de idioma y nos llegara "es" o "ca"
//añadida comprobacion en el array de que exista el idioma y sea permitido
if (isset($_GET["idioma"]) && in_array($_GET['idioma'], $idiomasPermitidos)) {
	$idioma = $_GET["idioma"];
	setcookie('idioma', $idioma, time() + 3600 * 24 * 30 * 12, '/');
}

//fichero que contiene el idioma (contenido_es.php o contenido_ca.php)
include("contenido_$idioma.php");

?>


<!DOCTYPE html>
<html>

<head>
	<title>IEM</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/page.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/page.js" type="text/javascript"></script>
</head>

<body>

	<!--inclusion de header con php-->
	<?php
	require('header.html');
	?>

	<div class="wraper">

		<!--inclusion de nav con php-->
		<?php
		require('nav.html');

		//inclusion de contenido leyendo el archivo contenido_cursos_"es" o "ca".php
		readfile("contenido_cursos_$idioma.php");

		//inclusion de footer con php
		require('footer.html');
		?>

	</div>
</body>

</html>