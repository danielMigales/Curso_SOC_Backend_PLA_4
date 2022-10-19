<?php
//titulo de la pagina
$h2 = 'CONTACTO';

//etiquetas del formulario
$nombre = 'Nombre: *';
$email = 'Email: *';
$telefono = 'Teléfono:';
$mensaje = 'Mensaje: *';
//boton y alerta
$boton = 'Enviar';
$alerta = '<span id="alertatext">En cumplimiento de la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal (LOPD), le informamos que los datos de carácter personal que usted nos comunique mediante este formulario de contacto serán confidenciales y, bajo ningún concepto, serán transmitidos a terceras personas.<br><br>';

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
	<script src="js/form.js" type="text/javascript"></script>
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
		?>

		<div class="content">
			<div class="slider">
				<img src="img/iem_3.jpg" /><img src="img/iem_4.jpg" />
			</div>

			<div class="sections">
				<h1 style="text-align:center">LOCALIZACIÓN DEL CENTRO Y CONTACTO</h1><br><br>
				<div class="contacto">

					<!--substitucion de titulo por variable-->
					<h2><?= $h2 ?></h2>

					<p>Los campos marcados con * son obligatorios.</p><br>

					<form id="form" name="form" method="get" action='#'>
						<!--substitucion de etiquetas por variable-->
						<label for="nombre"><?= $nombre ?></label><input type="text" name="nombre" autofocus id="nombre" /><br><br>
						<label for="email"><?= $email ?> </label><input type="email" name="email" id="email" placeholder="nom@mail.com" /><br><br>
						<label for="telefono"><?= $telefono ?></label><input type="tel" name="telefono" id="telefono"><br><br>
						<label><?= $mensaje ?></label><br><br>
						<textarea id="mensaje" name="mensaje" placeholder="Introduzca aquí su pregunta o comentario"></textarea><br><br>
						<span>He leido y acepto la política de privacidad:</span><br><br>
						<input id="privacidad" type="checkbox" name="privacidad">&nbsp&nbsp
						<span id='ver' onclick="muestraAlert()">Ver aquí</span><br><br>
						<input id="enviar" type="button" name="enviar" value="<?= $boton ?>" onclick="validaFormulario()" /><br>
					</form>

					<div id="alerta">
						<?= $alerta ?>
						<input type="button" onclick="ocultaAlert()" />
					</div>
				</div>
			</div>
			<br><br>
		</div>

		<!--inclusion de footer con php-->
		<?php
		require('footer.html');
		?>

	</div>
</body>

</html>