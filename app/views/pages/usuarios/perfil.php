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

        <!-- Perfil -->
        <section id="inicio">
            <div class="inicio-container">
                <div class="container" style="margin-top:150px; ">
                    <div class="profile-env" style="background: rgba(0, 0, 0, 0.3);" >
                        <header class="row">
                            <div class="col-sm-2">
                                <img src="img/perfil.jpg" class="img-responsive img-circle"> </a>
                            </div>
                            <div class="col-sm-7">        
                                <div class="profile-name">
                                    <strong style="color: #2dc997">Usuario</strong>
                                    <h3 style="color: white;"><?php echo $_SESSION['username']?></h3>
                                </div>
                                <div class="profile-name">
                                    <strong style="color: #2dc997">Nombre</strong>
                                    <h3 style="color: white;"><?php echo $params[1]['nombre']?></h3>
                                </div>
                                <div class="profile-name">
                                    <strong style="color: #2dc997">Apellido</strong>
                                    <h3 style="color: white;"><?php echo $params[1]['apellido']?></h3>
                                </div>
                                <div class="profile-name">
                                    <strong style="color: #2dc997">Correo Electronico</strong>
                                    <h3 style="color: white;"><?php echo $params[1]['email']?></h3>
                                </div>
                                <div class="profile-name">
                                    <strong style="color: #2dc997">Fecha de Nacimiento</strong>
                                    <h3 style="color: white;"><?php echo $params[1]['nacimiento']?></h3>
                                </div>
                                <div class="profile-name">
                                    <strong style="color: #2dc997">Numero de Telefono</strong>
                                    <h3 style="color: white;"><?php echo $params[1]['telefono']?></h3>
                                </div>
                            </div>
                        </header>
                        <section class="profile-info-tabs">
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <a href="editarPerfil">Editar Perfil</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Perfil -->

        </section>
        </section>

        <!-- Footer -->
        <?php require '../app/views/includes/footer.php'; ?>
        <!-- /Footer -->

        <!-- Scripts -->
        <?php require '../app/views/includes/scripts.php'; ?>
        <!-- /Scripts -->

    </body>
    <!-- /Body -->
</html>
