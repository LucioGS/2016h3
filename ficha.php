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

<?php
	$ficha = $_GET["num_ficha"];
	$url = "https://www.omdbapi.com/?apikey=fe8a7565&i=$ficha";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	$data = curl_exec($curl);
	curl_close($curl);
	$data_convertido = json_decode($data, true);
?>

<div class="container">
	</br>
	<div class="row">
    		<div class="col-sm-8">
			<table id="la_tabla" class="table table-striped">
				<?php
					echo "<tr><th>Título</th><td>" . $data_convertido["Title"] . "</td></tr>";
					echo "<tr><th>Elenco</th><td>" . $data_convertido["Actors"] . "</td></tr>";
					echo "<tr><th>Director</th><td>" . $data_convertido["Director"] . "</td></tr>";
					echo "<tr><th>Año</th><td>" . $data_convertido["Year"] . "</td></tr>";
					echo "<tr><th>Estreno</th><td>" . $data_convertido["Released"] . "</td></tr>";
					echo "<tr><th>Duración</th><td>" . $data_convertido["Runtime"] . "</td></tr>";
					echo "<tr><th>Guión</th><td>" . $data_convertido["Writer"] . "</td></tr>";
					echo "<tr><th>Sinopsis</th><td>" . $data_convertido["Plot"] . "</td></tr>";
					echo "<tr><th>Genero</th><td>" . $data_convertido["Genre"] . "</td></tr>";
					echo "<tr><th>País</th><td>" . $data_convertido["Country"] . "</td></tr>";
					echo "<tr><th>Clasificación</th><td>" . $data_convertido["Rated"] . "</td></tr>";
					echo "<tr><th>Premios</th><td>" . $data_convertido["Awards"] . "</td></tr>";
					echo "<tr><th>Puntuación Metacritic</th><td>" . $data_convertido["Metascore"] . "</td></tr>";
					echo "<tr><th>Puntuación IMDB</th><td>" . $data_convertido["imdbRating"] . "</td></tr>";
					echo "<tr><th>Recaudación</th><td>" . $data_convertido["BoxOffice"] . "</td></tr>";
					echo "<tr><th>Tipo</th><td>" . $data_convertido["Type"] . "</td></tr>";
				?>
			</table>
      		</div>
		<div class="col-sm-4">
			<?php
				echo "<img src='" . $data_convertido["Poster"] . "' />";
			?>
    		</div>
  	</div>	
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
	
	
	


	
	
