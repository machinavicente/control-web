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
	<?php include "./inc/head.php"; ?>
</head>
<body>

	<?php include"./inc/aside.php"; ?>
	<?php include"./inc/ventana.php"; ?>
	



