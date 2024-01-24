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
		
		<div class="conenido">

			<div class="insert_con">
					<?php include "./inc/insert_3.php"; ?>
	
			</div>
			<div class="crud">
				<div class="scroll contTabla" id="dTabla">
					<div class="botUp"></div>
					<table class="table">
						<thead class="head">
							<tr>
								
								<th>N. de Contrato</th>
								<th>N. de Piso</th>
								<th>Descripción</th>
								<th>Tamaño del Local</th>
								<th>N. de Local</th>
								<th>Nombre del Arrendatario</th>
								<th><img src="./img/ajustes.png"></th>
								
								<?php include("controlador/show_3.php"); ?>
							</tr>
						</thead>
					

						<tbody class="body">
				
							<?php 
							while($row = $result->fetch_array()){ ?>

								<tr class="celda">
							 		
							 		
							 		<td><?php echo $row["contrato"];?></td>
							 		<td><?php echo $row["piso"];?></td>
							 		<td><?php echo $row["descripcion"];?></td>
							 		<td><?php echo $row["tamano"];?></td>
							 		<td><?php echo $row["num"];?></td>
							 		<td><?php echo $row["nombre"];?></td>

							
							 		<td>
							 			<?php echo "<a href='update_form_3.php?id=" .$row['id']."'>MODIFICAR</a>"; ?>
							 		</td>
					  				
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