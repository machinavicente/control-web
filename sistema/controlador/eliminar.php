<?php 
   // Configuración de la conexión a la base de datos
   $server = 'localhost';
   $user = 'root';
   $pass = '';
   $bd = 'sistem';


   // Crear conexión
   $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");
   

   $id = $_GET['id'];
   $delete = "DELETE FROM piso_uno WHERE id = '$id'";
   $result = mysqli_query($conexion, $delete) or die("Error al Eliminar");
   header("Location: ../inicio.php");
   
   mysqli_close($conexion);
   
 ?>