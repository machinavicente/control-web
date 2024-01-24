<?php 

   $server = 'localhost';
   $user = 'root';
   $pass = '';
   $bd = 'sistem';

   // Crear conexión
   $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");
 ?>