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
    $num_local = $_POST['num_local'];
    $nombre = $_POST['nombre'];
    $piso = $_POST['piso'];
    $descripcion = $_POST['descripcion'];
    $tamano= $_POST['tamano'];


    // Construir la consulta de actualización
    $sql_update = "UPDATE piso_uno SET
        num = '$num_local',
        contrato = '$num_contrato', 
        nombre = '$nombre',
        piso = '$piso',
        descripcion = '$descripcion',
        tamano = '$tamano'
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
                <p class="descripcion">-Detalles del Local-</p>
                <br>   
                <input type="hidden" name="id" value="<?php echo $id; ?>">
           
                <label for="num_contrato"> N. de Contrato</label>
                <input type="text" name="num_contrato" placeholder="Numero de Contrato" value="<?php echo $row["contrato"]; ?>" required minlength="3" maxlength="60" title="Ingrese los datos">


                <label for="nombre">Nombre Completo: </label>
                <input type="text" name="nombre" placeholder="Nombre del Arrendatario" value="<?php echo $row["nombre"]; ?>" required >

                <label for="piso">N Piso:</label>
                <input type="number" name="piso" placeholder="Numero de piso" value="<?php echo $row["piso"]; ?>" required>
                 

                <label for="num_local">N. Local: </label>
                <input type="number" name="num_local" placeholder="Numero del Local" value="<?php echo $row["num"]; ?>" required>

                <label>Descripcion: </label>
                <input type="text" name="descripcion" placeholder="Descripcion del Local" value="<?php echo $row["descripcion"]; ?>" required>

                <label>Tamaño: </label>
                <input type="text" name="tamano" placeholder="Tamaño del Local en metros" value="<?php echo $row["tamano"]; ?>" required>

                <div class="btns">
                    <input href="/" onclick="return confirm('Estas Seguro de Realizar estos Cambios?')" type="submit" name="enviar" value="Enviar" >
            </div>
        </form>
    	</div>
        </div>
    </section>


    <?php

} else {
     header("location: ./locales_mod.php");
}

// Cerrar la conexiónheader
mysqli_close($conexion);
?>

</body>
</html>
