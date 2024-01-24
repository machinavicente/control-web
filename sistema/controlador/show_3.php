<?php

   // Configuración de la conexión a la base de datos
   $server = 'localhost';
   $user = 'root';
   $pass = '';
   $bd = 'sistem';

   // Crear conexión
   $conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error al conectar");

   // Realizar consulta para obtener los datos de la tabla
   $sql = "SELECT id,nombre, num, contrato, piso, descripcion, tamano FROM piso_uno";
   $result = $conexion->query($sql);

   // Verificar si hay algún resultado



   $conexion->close();

?>