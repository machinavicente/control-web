<?php 	
	// declarar las variables que estableceran la conexion a la base de datos
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$bd = 'sistem';

	//conexion a la base de datos
	$conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");

	// conectando la variables con el name en los input del formulario

	$num_local = $_POST['num_local'];
	$contrato = $_POST['num_contrato'];
	$tiempo_alq = $_POST['tiempo_alq'];
	$mensualidad = $_POST['mensualidad'];
	$fecha_ini = $_POST['fecha_ini'];
	$fecha_ven = $_POST['fecha_ven'];
	$nombre = $_POST['nombre'];
	$piso = $_POST['piso'];
	$telefono = $_POST['telefono'];
	$cedula = $_POST['cedula'];
	$correo = $_POST['correo'];
	$direccion = $_POST['direccion'];
	$descripcion = $_POST['descripcion'];
	$tamano = $_POST['tamano'];

	

	// sentencia SQL
	$insert = "INSERT INTO piso_uno(`num`, `contrato`, `nombre`,  `cedula`, `piso`, `correo`, `tiempo`, `mensualidad`, `inicio`, `vencimiento`, `direccion`, `descripcion`, `tamano`, `telefono`) VALUES ('$num_local', '$contrato', '$nombre', '$cedula',   '$piso', '$correo', '$tiempo_alq', '$mensualidad', '$fecha_ini', '$fecha_ven', '$direccion', '$descripcion', '$tamano', '$telefono' )";

	
	$result = mysqli_query($conexion, $insert) or die("Error al insertar datos");
	
	// cerrar conexion
	mysqli_close($conexion);
	header("Location: ../primer_piso.php");

 ?>