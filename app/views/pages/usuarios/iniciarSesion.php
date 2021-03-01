<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <!-- Header -->
  <?php require '../app/views/includes/header.php'; ?>
  <!-- Header -->

  <body>

     <!-- Navbar-->
     <?php require '../app/views/includes/navbar.php'; ?>
    <!-- /Navbar-->

     <!-- Inicio sesion -->
     <section id="inicio">
      <div class="inicio-container">
        <h1>Iniciar Sesion</h1>
        <div class="main-container">
          <form method="POST" action="<?php echo URL_PATH ?>/sesion/login">
              <div class="form-group">
                <label style="color: #2dca98" for="InputUser">Nombre de Usuario</label>
                <input type="text" name="username" class="form-control" id="InputUser" required>
              </div>
              <div class="form-group">
                <label style="color: #2dca98" for="InputPass">Contraseña</label>
                <input type="password" name="password" class="form-control" required id="InputPass">
              </div>
              <label style="color: red" for="InputUser">
                <?php
                  if(isset($_GET['error'])){
                    if($_GET['error'] == 0) echo 'Nombre de usuario no encontado';
                    else echo 'Contraseña incorrecta';
                  } 
                ?>
              </label> <br>
              <button type="submit" class="btn-get-started btn-secondary">Iniciar Sesion</button>
            </form>
        </div>
      </div>
    </section>
    <!-- /Inicio sesion -->
  
     <!-- Footer -->
     <?php require '../app/views/includes/footer.php'; ?>
    <!-- /Footer -->

    <!-- Scripts -->
    <?php require '../app/views/includes/scripts.php'; ?>
    <!-- /Scripts -->

  </body>
</html>
