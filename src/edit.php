<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>VIDEOJUEGOS</title>
</head>
<body>
<div>
	<header>
		<h1>Videojuegos</h1>
	</header>
	
	<main>				
	<ul>
		<li><a href="index.php" >Inicio</a></li>
		<li><a href="add.html" >Alta</a></li>
	</ul>
	<h2>Modificación videojuego</h2>


<?php


/*Obtiene el id del registro del empleado a modificar, idempleado, a partir de su URL. Este tipo de datos se accede utilizando el método: GET*/

//Recoge el id del empleado a modificar a través de la clave idempleado del array asociativo $_GET y lo almacena en la variable idempleado
$idvideojuego = $_GET['idjuego'];

//Con mysqli_real_scape_string protege caracteres especiales en una cadena para ser usada en una sentencia SQL.
$idvideojuego = $mysqli->real_escape_string($idvideojuego);


//Se selecciona el registro a modificar: select
$resultado = $mysqli->query("SELECT nombre, subgenero, plataforma, año_lanzamiento, desarrollador, puntuacion FROM Videojuegos WHERE id = $idvideojuego");

//Se extrae el registro y lo guarda en el array $fila
//Nota: También se puede utilizar el método fetch_assoc de la siguiente manera: $fila = $resultado->fetch_assoc();
$fila = $resultado->fetch_array();
$name = $fila['nombre'];
$subgenre = $fila['subgenero'];
$platform = $fila['plataforma'];
$age = $fila['año_lanzamiento'];
$developer = $fila['desarrollador'];
$score = $fila['puntuacion'];

//Se cierra la conexión de base de datos
$mysqli->close();
?>

<!--FORMULARIO DE EDICIÓN. Al hacer click en el botón Guardar, llama a la página (form action="edit_action.php"): edit_action.php
-->

<form action="edit_action.php" method="post">
			<div>
				<label for="name">Nombre</label>
				<input type="text" name="name" id="name" value="<?php echo $name;?>" required>
			</div>

			<div>
			<label for="subgenre">Subgénero</label>
			<input type="text" name="subgenre" id="subgenre" value="<?php echo $subgenre;?>" required>
			</div>

			<div>
			<label for="platform">Plataforma</label>
			<select name="platform" id="platform" placeholder="plataforma" required>
				<option value="<?php echo $platform;?>" selected><?php echo $platform;?></option>
				<option value="PC">PC</option>
				<option value="PlayStation 2">PlayStation 2</option>
				<option value="PlayStation 3">PlayStation 3</option>
				<option value="PlayStation 4">PlayStation 4</option>
			</select>
			</div>

			<div>
			<label for="age">Año de Lanzamiento</label>
			<input type="number" name="age" id="age" value="<?php echo $age;?>" required>	
			</div>

			<div>
			<label for="developer">Desarrollador</label>
			<input type="text" name="developer" id="developer" value="<?php echo $developer;?>" required>
			</div>

			<div>
			<label for="score">Puntuación</label>
			<input type="number" name="score" id="score" value="<?php echo $score;?>" required>
			</div>

			<div >
				<input type="hidden" name="idempleado" value=<?php echo $idvideojuego;?>>
				<input type="submit" name="modifica" value="Guardar">
				<input type="button" value="Cancelar" onclick="location.href='index.php'">
			</div>
		</form>
		</main>	
		<footer>
			Created by the IES Miguel Herrero team &copy; 2024
		</footer>
	</div>
	</body>
	</html>

