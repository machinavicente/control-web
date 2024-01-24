<section>
	
	<div class="cards">
		
		<div class="left">
			<div class="up">
				<div class="imgs"><img src="img/usuario.png"></div>	
				<div class="controller">
					<h2>Modulo de Clientes</h2>
					<p>Ahora puedes acceder fácilmente al control y gestión de datos de tus arrendatarios </p>
					<h3>Clientes Activos: <?php include "./controlador/contador.php"; ?></h3><a href="./primer_piso.php" title=""><img src="img/arrow.png" ></a>
					
				</div>					
			</div>

			<div class="up">
				<div class="imgs"><img src="img/tienda.png"></div>	
				<div class="controller">
					<h2>Modulo de Locales</h2>
					<p>Más Control, Menos Esfuerzo, Simplifica la gestión de datos de cada local con nuestro Módulo especializado. .</p>
					<h3>Locales en Operación:<?php include "./controlador/contador.php"; ?></h3> <a href="./Locales_mod.php" title=""><img src="img/arrow.png" ></a>
					
				</div>					
			</div>
			
		</div>
		<div class="der">
				<div class="up">
					<div class="imgs"><img src="img/cont.png"></div>	
					<div class="controller">
						<h2>Nuevo Arrendamiento</h2>
						<p>Formulario de registro, en el cual se debera completar los datos correspondientes al cliente, contrato y local.</p>
						<h3>Nuevo Contrato</h3> <a href="./form_insert.php" title=""><img src="img/arrow.png" ></a>
					</div>
				</div>					
		</div>
	</div>	
			
</section>
	
</body>

</html>