<?php
//en este archivo estan todas las validaciones de idioma
require("validaciones.php");

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
	<?php require('html/header.html'); ?>
	<div class="wraper">
		<!--inclusion de nav con php-->
		<?php require('html/nav.html'); ?>
		<div class="content">
			<div class="slider">
				<img src="img/iem_1.jpg" /><img src="img/iem_2.jpg" />
			</div>
			<?php
			//inclusion de contenido leyendo el archivo contenido_index_"es" o "ca".php
			readfile("contenido_index_$idioma.php");
			?>
			<br><br>
		</div>
		<?php
		//inclusion de footer con php
		require('html/footer.html');
		?>
	</div>
</body>

</html>