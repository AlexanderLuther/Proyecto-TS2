<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Tiempo Maya</title>
  <link  rel="icon"  href="img/logo.png" type="image/png"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar-->
  <header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active">  <a href="index.php" style="color: white;font-size: 23px;"><strong>TIEMPO</strong> MAYA</a></li>
          <li><a href="LineaDeTiempo.php">Linea del Tiempo</a></li>
          <li><a href="CalendarioHaab.php">Calendario Haab</a></li>
          <li><a href="CalendarioCholqij.php">Calendario Cholquij</a></li>
          <li><a href="#">Rueda Calendarica</a></li>
          <li><a href="../nahuales.php">Nahuales</a></li>
          <?php 
          if (isset($_SESSION['nombre'])) {
              echo '<li><a href="cerrarSesion.php">Cerrar Sesion</a></li>';
          }else{
              echo '<li><a href="iniciarSesion.php">Iniciar Sesion</a></li>
              <li><a href="#">Registrarse</a></li>';
          }
          ?>
        </ul>
      </nav>
    </div>
  </header>
  <!-- /Navbar-->

  <!-- Section -->  
  <section id="inicio">
    <div class="inicio-container">
      <h1>Bienvenido al Tiempo Maya</h1>
    </div>
  </section>
  <!-- /Section -->

  <!-- Footer -->
  <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Teoria de Sistemas</strong>. Derechos Reservados
        </div>
      </div>
    </footer>
  <!-- /Footer --> 

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  
</body>
</html>