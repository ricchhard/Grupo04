<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>TAREA GRUPAL</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="js/funcion.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">


	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body style="background-image: url('https://www.todofondos.net/wp-content/uploads/3840x2160-Papel-de-pantalla-4K-rojo-y-negro-4K-1024x576.jpg')">
	<center>
	<img src="img/logo.png" width="300" height="60">
    </br></br>
	<h1>Aplicación de Tecnologías WEB</h1>
	<h1>Tercer Parcial</h1>
	<h1>Integrantes: Richard Caraguay y Paola Farinango</h1>

	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");

		echo figura::get_form();
		
	?>

	</center>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/main.js"></script>
</body>

</html>
