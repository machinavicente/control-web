<?php  
    session_start();

if (!isset($_SESSION['Admin_user'])) {
    // Si no existe una sesión activa, redireccionar al inicio
    header("Location: ./index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/pisos.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/actualizar.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="shortcut icon" href="./favicon.ico">
	<title>MODIFICAR</title>
</head>
<body>
<?php
include("controlador/conectar.php");
include"./inc/aside.php";

// Verificar si se ha enviado el formulario
if (isset($_POST['enviar'])) {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $num_contrato = $_POST['num_contrato'];
    $tiempo_alq = $_POST['tiempo_alq'];
    $mensualidad = $_POST['mensualidad'];
    $fecha_ini = $_POST['fecha_ini'];
    $fecha_ven = $_POST['fecha_ven'];

    // Construir la consulta de actualización
    $sql_update = "UPDATE piso_uno SET
        contrato = '$num_contrato', 
        tiempo = '$tiempo_alq',
        mensualidad = '$mensualidad',
        inicio = '$fecha_ini',
        vencimiento = '$fecha_ven'
        WHERE id = '$id'";

    // Ejecutar la consulta de actualización
    $resultado_update = mysqli_query($conexion, $sql_update);

    if ($resultado_update) {
        echo "Datos actualizados correctamente.";
        // Puedes redirigir al usuario a otra página o realizar otras acciones después de la actualización.
    } else {
        echo "Error al actualizar datos: " . mysqli_error($conexion);
    }
}

// Obtener el ID de la fila que se va a modificar
		$id = $_GET['id'];

// Construir la consulta para obtener los datos existentes
$sql_select = "SELECT * FROM piso_uno WHERE id = '$id'";
$resultado_select = mysqli_query($conexion, $sql_select);

// Verificar si se encontraron datos
if ($row = $resultado_select->fetch_array()) {
    // Mostrar el formulario con los valores existentes
    ?>

    <section>
        <?php include "./inc/header.php"; ?>
        <div class="insertar">
            
    		<div class="centro">
        		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" accept-charset="utf-8" class="update_form">
                    <p class="descripcion">-Detalles del Contrato-</p>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
               
                    <label for="num_contrato"> N. de Contrato</label>
                    <input type="text" name="num_contrato" placeholder="Numero de Contrato" value="<?php echo $row["contrato"]; ?>" required minlength="3" maxlength="60" title="Ingrese los datos">


                    

                    <label for="mensualidad">Mensualidad:</label>
                    <input type="number" name="mensualidad" placeholder="Mensualidad en $" value="<?php echo $row["mensualidad"]; ?>" required>
                    
      

                    <label for="fecha_ini">Incio del Contrato: </label>
                    <input type="date" name="fecha_ini" placeholder="Inicio del Contrato" value="<?php echo $row["inicio"]; ?>" id="fechaInicio" required>

                    <label>Vencimiento del contrato: </label>
                    <input type="date" name="fecha_ven" placeholder="Vencimiento del Contrato" value="<?php echo $row["vencimiento"]; ?>" id="fechaFin" required>
                    <label for="tiempo_alq">Tiempo de Alquiler: </label>
                    <input type="number" name="tiempo_alq" placeholder="Tiempo de Alquiler" value="<?php echo $row["tiempo"]; ?>" id="periodo" required >
                    <br>
                    <script src="js/ini_ven.js" type="text/javascript"></script>
                    
                    <div class="btns">
                        <input href="/" onclick="return confirm('Estas Seguro de Realizar estos Cambios?')" type="submit" name="enviar" value="Enviar" >
                </div>
            </form>
        	</div>
        </div>
    </section>


    <?php

} else {
     header("location: ./segundo_piso.php");
}

// Cerrar la conexiónheader
mysqli_close($conexion);
?>

</body>
</html>
