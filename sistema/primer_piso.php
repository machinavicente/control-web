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
					<?php include "./inc/insert.php"; ?>
	
			</div>

			<div class="crud">
				<div class="scroll contTabla" id="dTabla">
					<div class="botUp"></div>
					<table class="table">
						<thead class="head">
							<tr>
								<th>Nombre Completo</th>		
								<th>C.I</th>
								<th>Email</th>
								<th>Telefono</th>
								<th>Direccion</th>
								<th>N° de Local</th>
								<th>N° de Contrato</th>
								
								<th><img src="./img/ajustes.png"></th>
								
								<?php include("controlador/show.php") ?>
							</tr>
						</thead>
		
						<tbody class="body">
				
							<?php 
							while($row = $result->fetch_array()){ ?>

								<tr class="celda">
									<td><?php echo $row["nombre"];?></td>
									<td><?php echo $row["cedula"];?></td>
									<td><?php echo $row["correo"];?></td>
									<td><?php echo $row["telefono"];?></td>
									<td><?php echo $row["direccion"];?></td>
							 		<td><?php echo $row["num"];?></td>
							 		<td><?php echo $row["contrato"];?></td>
							 		
							 		<td>
							 			<?php echo "<a href='update_form.php?id=" .$row['id']."'>MODIFICAR</a>"; ?>
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