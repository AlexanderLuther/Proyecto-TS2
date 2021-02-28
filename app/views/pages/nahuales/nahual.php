<!DOCTYPE html>
<html lang="es">

  <!-- Header -->
  <?php require '../app/views/includes/header.php'; ?>
  <!-- Header -->

   <!-- Body -->
   <body>
    
    <!-- Navbar-->
    <?php require '../app/views/includes/navbar.php'; ?>
    <!-- /Navbar-->
    
     <!-- Menu -->
     <section id="inicio">
      <div class="inicio-container">
        <h1>Nahuales</h1>
        <div class="row">
            <div class="col-12">
                <a href="#aj" class="btn-get-started">Aj</a>
                <a href="#ajmaq" class="btn-get-started">Ajmaq</a>
                <a href="#ajpu" class="btn-get-started">Ajpu</a>
                <a href="#aqabal" class="btn-get-started">Aqabal</a>
                <a href="#batz" class="btn-get-started">B'atz'</a>
                <a href="#e" class="btn-get-started">E</a>
                <a href="#imox" class="btn-get-started">Imox</a>
                <a href="#iq" class="btn-get-started">Iq'</a>
                <a href="#ix" class="btn-get-started">Ix</a>
                <a href="#kame" class="btn-get-started">Kame</a>
                <a href="#kan" class="btn-get-started">K'an</a>
                <a href="#kat" class="btn-get-started">K'at</a>
                <a href="#kawoq" class="btn-get-started">Kawoq</a>
                <a href="#kej" class="btn-get-started">Kej</a>
                <a href="#noj" class="btn-get-started">No'j</a>
                <a href="#qanil" class="btn-get-started">Q'anil</a>
                <a href="#tijax" class="btn-get-started">Tijax</a>
                <a href="#tzi" class="btn-get-started">Tz'i'</a>
                <a href="#tzkin" class="btn-get-started">Tz'ikin</a>
                <a href="#toj" class="btn-get-started">Toj</a> 
            </div>
        </div>
      </div>
    </section>
    <!-- /Menu -->

    <!-- Nahuales -->
    <section id="nahuales">
        <div class="container">
            <div class="row about-container">
                <?php include '../app/views/pages/nahuales/nahuales.php' ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Nahuales -->

    <!-- Footer -->
    <?php require '../app/views/includes/footer.php'; ?>
    <!-- /Footer -->

     <!-- Scripts -->
     <?php require '../app/views/includes/scripts.php'; ?>
    <!-- /Scripts -->

  </body>
  <!-- /Body -->

</html>
