<?php
function conectar()
{
	$user = "root";
	$pass = "";
	$server = "localhost";
	$db = "cloudpage";

	$con = mysqli_connect($server, $user, $pass, $db) or die("Error al conectar a la base de datos".mysql_error());

	return $con;
}
?>