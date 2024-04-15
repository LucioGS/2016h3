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
		$titulo = $_POST["titulo"];
		$year = $_POST["year"];
		$tipo = $_POST["tipo"];
		$url = "https://www.omdbapi.com/?apikey=fe8a7565&s=$titulo&y=$year&type=$tipo";
		$url = str_replace(' ', '%20', $url);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		$data = curl_exec($curl);
		curl_close($curl);

		echo "<tr><th>Título</th><th>Año</th><th>Tipo</th><th>Acciones</th></tr>";
		$data_convertido = json_decode($data, true);

		foreach($data_convertido["Search"] as $film){
			echo "<tr>";
			echo "<td>" . $film["Title"] . "</td>";
			echo "<td>" . $film["Year"] . "</td>";
			echo "<td>" . $film["Type"] . "</td>";
			echo "<td><a href='ficha.php?num_ficha=" . $film["imdbID"] . "'>" . "<button class='btn btn-outline-success btn-sm'>Ficha</button>" . "</a></td>";
			echo "</tr>";
		}
	?>
	</table>
	</br>
	<p>
		<?php
			echo "&nbsp;&nbsp;" . $data_convertido["totalResults"] . " registros encontrados"
		?>
	</p>	
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
	
	
	


	
	
