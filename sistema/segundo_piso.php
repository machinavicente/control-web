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
	<section>
		
		<div class="contenido">

			<div class="insert_con">
					<?php include "./inc/insert_2.php"; ?>
			</div>
			<div class="crud">
				<div class="scroll contTabla" id="dTabla">
					<div class="botUp"></div>
					<table class="table">
						<thead class="head">
							<tr>
								
								<th>N. Contrato</th>
								<th>Tiempo de alquiler</th>
								<th>Mesualidad</th>
								<th>Inicio del Contrato</th>
								<th>Vencimiento del Contrato</th>
								
								<th>Nombre del Arrendatario</th>

								<th><img src="./img/ajustes.png"></th>
								<th><img src="./img/delete.png"></th>
								
								<?php include("controlador/show_2.php"); ?>
							</tr>
						</thead>
					

						<tbody class="body">
				
							<?php 
							while($row = $result->fetch_array()){ ?>

								<tr class="celda">
							 		
							 		
							 		<td><?php echo $row["contrato"];?></td>
							 		<td><?php echo $row["tiempo"];?></td>
							 		<td><?php echo $row["mensualidad"];?></td>
							 		<td><?php echo $row["inicio"];?></td>
							 		<td><?php echo $row["vencimiento"];?></td>
							 		
							 		<td><?php echo $row["nombre"];?></td>
							
							 		<td>
							 			<?php echo "<a href='update_form_2.php?id=" .$row['id']."'>MODIFICAR</a>"; ?>
							 		</td>
							 		<td href="/sistema/segundo_piso.php" onclick="return confirm('Estas Seguro que quieres eliminar este Contrato?')">
							 			<?php echo "<a href='./controlador/eliminar.php?id=" .$row['id']."'>ELIMINAR</a>"; ?>
							 		</td>
					  			
							 	</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class="botDn"></div>
					<script type="text/javascript" src="js/table-resposive.js"></script>
				</div>
			</div>
			


		</div>
	</section>
</body>
</html>