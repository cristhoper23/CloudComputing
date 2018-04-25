<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Cloud</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<?php
	include 'conexion.php';

	$con = conectar();

	$nom = $_POST['nombre'];
	$email = $_POST['correo'];
	$pais = $_POST['pais'];
	$foto = $_POST['foto'];

	$sql = "INSERT INTO alumnos(nombre, correo, pais, foto) VALUES ('$nom', '$email', '$pais', '$foto')";
	mysqli_query($con, $sql) or die("Error al insertar datos en la DB");
	mysqli_close($con);

	echo "Se realizó la conexión exitosamente";
	?>
	<br><hr>
	<button class="btn btn-warning"><a href="index.php">Regresar</a></button>
</body>
</html>
