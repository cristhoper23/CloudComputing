<?php
include 'conexion.php';

$con = conectar();

$nom = $_POST['nombre'];
$email = $_POST['correo'];

$sql = "INSERT INTO alumnos(nombre, correo) VALUES ('$nom', '$email')";
mysqli_query($con, $sql) or die("Error al insertar datos en la DB");
mysqli_close($con);

echo "Se realizó la conexión exitosamente";
?>