<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Añadir videojuego</title>
</head>
<body>
<div>
	<header>
		<h1>Videojuegos</h1>
	</header>
	<main>

<?php
/* Se Comprueba si se ha llegado a esta página PHP a través del formulario de altas. 
Para ello se comprueba la variable de formulario: "inserta" enviada al pulsar el botón Agregar.
Los datos del formulario se acceden por el método: POST
*/

if(isset($_POST['inserta'])) 
{
/*Se obtienen los datos del empleado (nombre, apellido, edad y puesto) a partir del formulario de alta (name, surname, age y job)  por el método POST.
Se envía a través del body del HTTP Request. No aparecen en la URL como era el caso del otro método de envío de datos: GET
Recuerda que   existen dos métodos con los que el navegador puede enviar información al servidor:
1.- Método HTTP GET. Información se envía de forma visible. A través de la URL (header HTTP Request )
En PHP los datos se administran con el array asociativo $_GET. En nuestro caso el dato del empleado se obiene a través de la clave: $_GET['idempleado']
2.- Método HTTP POST. Información se envía de forma no visible. A través del cuerpo del HTTP Request 
PHP proporciona el array asociativo $_POST para acceder a la información enviada.
*/

	$name = $mysqli->real_escape_string($_POST['name']);
	$subgenre = $mysqli->real_escape_string($_POST['subgenre']);
	$platform = $mysqli->real_escape_string($_POST['platform']);
	$age = $mysqli->real_escape_string($_POST['age']);
	$developer = $mysqli->real_escape_string($_POST['developer']);
	$score = $mysqli->real_escape_string($_POST['score']);

/*Con mysqli_real_scape_string protege caracteres especiales en una cadena para ser usada en una sentencia SQL.
Esta función es usada para crear una cadena SQL legal que se puede usar en una sentencia SQL. 
Los caracteres codificados son NUL (ASCII 0), \n, \r, \, ', ", y Control-Z.
Ejemplo: Entrada sin escapar: "O'Reilly" contiene una comilla simple (').
Escapado con mysqli_real_escape_string(): Se convierte en "O\'Reilly", evitando que la comilla se interprete como el fin de una cadena en SQL.
*/

//Se comprueba si existen campos del formulario vacíos
	if(empty($name) || empty($subgenre) || empty($platform) || empty($age) || empty($developer) || empty($score) ) 
	{
		if(empty($name)) {
			echo "<div>Campo nombre vacío.</div>";
		}

		if(empty($subgenre)) {
			echo "<div>Campo subgénero vacío</div>";
		}
		
		if(empty($platform)) {
			echo "<div>Campo plataforma vacío.</div>";
		}

		if(empty($age)) {
			echo "<div>Campo edad vacío.</div>";
		}

		if(empty($developer)) {
			echo "<div>Campo desarrollador vacío.</div>";
		}

		if(empty($score)) {
			echo "<div>Campo puntuación vacío.</div>";
		}

//Enlace a la página anterior
		//Se cierra la conexión
		$mysqli->close();
		echo "<a href='javascript:self.history.back();'>Volver atras</a>";
	} //fin si
	else //Sino existen campos de formulario vacíos se procede al alta del nuevo registro
	{
//Se ejecuta una sentencia SQL. Inserta (da de alta) el nuevo registro: insert.
		$result = $mysqli->query("INSERT INTO empleados (nombre, apellido, edad, puesto) VALUES ('$name', '$subgenre', '$platform', '$age', '$developer', '$score')");	
		//Se cierra la conexión
		$mysqli->close();
		echo "<div>Registro añadido correctamente...</div>";
		echo "<a href='index.php'>Ver resultado</a>";
		//Se redirige a la página principal: index.php
		//header("Location:index.php");
	}//fin sino
}
?>

 	<!--<div>Registro añadido correctamente</div>
	<a href='index.php'>Ver resultado</a>-->
	</main>
</div>
</body>
</html>
