<?php
//idioma por defecto
$idioma = 'es';

//obtenemos el idioma del navegador
$idiomaNavegador = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

//array de idiomas permitidos
$idiomasPermitidos = array('es', 'ca');

//comparamos el idioma del navegador con el array de admitidos. Si coincide se mantiene y en caso contrario se ajusta a español
if (in_array($idiomaNavegador, $idiomasPermitidos)) {
	$idioma = $idiomaNavegador;
} else {
	//variable idioma por defecto si el navegador no es permitido
	$idioma = "es";
}

//detectamos si hay una cookie con el idioma y si ese idioma esta en el array de permitidos. Si no esta se establece español
if (isset($_COOKIE['idioma']) && in_array($_COOKIE['idioma'], $idiomasPermitidos)) {
	$idioma = $_COOKIE['idioma'];
}
else{
	$idioma = 'es';
}

//detectamos cuando el usuario pulsa el enlace de idioma y nos llegara "es" o "ca"
//añadida comprobacion en el array de que exista el idioma y sea permitido
if (isset($_GET["idioma"]) && in_array($_GET['idioma'], $idiomasPermitidos)) {
	$idioma = $_GET["idioma"];
	setcookie('idioma', $idioma, time() + 3600 * 24 * 30 * 12, '/');
}
