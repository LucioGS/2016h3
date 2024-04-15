<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla de datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>

<div class="container">
	</br>
  	<table class="table table-striped">
	<?php
		$xml = simplexml_load_file("usuarios.xml");
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);

		echo "<tr><th>Nombre</th><th>Apellidos</th><th>Teléfono</th><th>Email</th><th>Dirección</th><th>Localidad</th><th>Acciones</th></tr>";

		foreach($un_array["usuario"] as $usuario){
			echo "<tr>";
			echo "<td>" . $usuario["nombre"] . "</td>";
			echo "<td>" . $usuario["apellidos"] . "</td>";
			echo "<td>" . $usuario["telefono"] . "</td>";
			echo "<td>" . $usuario["email"] . "</td>";
			echo "<td>" . $usuario["direccion"] . "</td>";
			echo "<td>" . $usuario["localidad"] . "</td>";
			echo "<td><a href='preferidos.php?id_usuario=" . $usuario["id"] . "'>" . "<button class='btn btn-outline-success btn-sm'>Preferidos</button>" . "</a></td>";
			echo "</tr>";
		}
	?>
	</table>	
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
	
	
	


	
	
