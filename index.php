<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Cloud</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-2">
		<em class="">Servicio de registro de alumnos en la nube</em>
	</div>
	<hr>
	<form action="principal.php" method="POST" align="center">
		<div style="width: 300px; margin: auto;">
			<h3>Cloud Computing</h3>
			<br>
			<div class="form-group">
				<input type="text" class="form-control" name="nombre" placeholder="Nombre">
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" name="correo" placeholder="Email">
			</div>

			<div class="form-group">
				<select class="custom-select" name="pais" id="pais">
					<option value="Perú">Perú</option>
					<option value="Colombia">Colombia</option>
					<option value="México">México</option>
				</select>
			</div>
			
			<input type="submit" value="Enviar" class="btn">
		</div>
	</form>
	<hr>
	<footer class="container" align="center">
		<em>UniversityCloud © 2018</em>
	</footer>
</body>
</html>