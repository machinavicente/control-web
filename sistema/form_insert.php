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
	<title>Insertar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/pisos.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">


  <link rel="shortcut icon" href="./favicon.ico">
</head>
<body >
  <?php include"./inc/aside.php"; ?>
	<section>
      <div class="container">
        <header>Registrar Cliente</header>
        <div class="progress-bar">
         <div class="step">
          <p>Cliente</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contrato</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Local</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="./controlador/conexion.php" method="post">
          <div class="page slide-page">
            <div class="title">- Detalles del Cliente -</div>
            <div class="field">
              <label for="">Nombre Completo</label>
              <input type="text" name="nombre" placeholder="Nombre del Arrendado"  minlength="3" maxlength="60"  pattern="[A-Za-z-' ']+" />
            </div>
           <div class="field">
              <label for="">Cedula</label>
              <input type="number" name="cedula" placeholder="Cedula del Arrendado"  minlength="6" maxlength="8" />
            </div>
            <div class="field">
              <label for="">Email</label>
              <input type="Email" name="correo" placeholder="Email del Arrendado"  />
            </div>
              <div class="field">
              <label for="">Celular</label>
              <input type="number" name="telefono" placeholder="Celular del Arrendado"  />
            </div>
            <div class="field">
              <label for="">Dirección</label>
              <input type="text" name="direccion" placeholder="Dirección del arrendatario"  />
            </div>
            <div class="field">
              <button class="firstNext next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title">- Detalles del Contrato -</div>
            <div class="field">
              <label for="">N contrato</label>
              <input type="text" name="num_contrato" placeholder="Numero del Contrato" />
            </div>
            
            <div class="field">
              <label for="">Mensualidad</label>
              <input type="number" name="mensualidad" placeholder="Ingrese el Monto en $" />
            </div>
            <div class="field">
              <label for="">Inicio</label>
              <input type="date" name="fecha_ini" id="fechaInicio" placeholder="Inicio del Contrato" />
            </div>
            <div class="field">
              <label for="">Vencimiento</label>
              <input type="date" name="fecha_ven" id="fechaFin" placeholder="Vencimeinto del contrato" />
            </div>
            <div class="field">
              <label for="">Tiempo de alquiler</label>
              <input type="number" name="tiempo_alq" id="periodo" placeholder="Tiempo de alquiler en meses" />
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Atrás</button>
              <button class="next-1 next">Siguiente</button>
            </div>
          </div>
         
          <div class="page">
            <div class="title">- Detalles del Local -</div>
            <div class="field">
              <label for="">N de Piso</label>
              <input type="number" name="piso" placeholder="Ingrese el Piso del Local" />
            </div>
            <div class="field">
              <label for="">N de Local</label>
              <input type="number" name="num_local" placeholder="Ingrese el N. de Local" />
            </div>
            <div class="field">
              <label for="">Descripcion de Local</label>
              <input type="text"  name="descripcion" placeholder="Pequeña descripcion del local" />
            </div>
            <div class="field">
              <label for="">Tamaño del local</label>
              <input type="text" name="tamano" placeholder="Tamaño en metros" required />
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Atrás</button>
              <button class="submit" name="enviar">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="js/multipasos.js"></script>
    <script src="js/ini_ven.js" type="text/javascript"></script>
			   
	</section>		
</body>
</html>