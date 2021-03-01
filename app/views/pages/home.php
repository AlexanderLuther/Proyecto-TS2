<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <!-- Header -->
    <?php require '../app/views/includes/header.php'; ?>
  <!-- Header -->

   <!-- Body -->
  <body>

    <!-- Navbar-->
    <?php require '../app/views/includes/navbar.php'; ?>
    <!-- /Navbar-->

    <!-- Mensaje de Bienvenida -->  
    <section id="inicio">
      <div class="inicio-container">
        <h1>Bienvenido al Tiempo Maya <?php echo $_SESSION['username']?> </h1>
      </div>
    </section>
    <!-- /Section -->

    <!-- Footer -->
    <?php require '../app/views/includes/footer.php'; ?>
    <!-- /Footer -->

    <!-- Scripts -->
      <?php require '../app/views/includes/scripts.php'; ?>
    <!-- /Scripts -->
    
  </body>
  <!-- /Body -->

</html>