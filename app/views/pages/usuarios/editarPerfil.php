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

    <!-- Perfil -->
    <section id="inicio">
            <div class="inicio-container">
                <div class="container" style="margin-top:150px; ">
                    <div class="profile-env" style="background: rgba(0, 0, 0, 0.3);" >
                        
                        <header class="row">
                         
                            <div class="col-sm-2">
                                <img src="img/perfil.jpg" class="img-responsive img-circle"> </a>
                            </div>


                            <div class="col-sm-9">           
                              <form action="#" method="POST">
                                <div class="card-body">
                                  <h5 style="color:white">Informacion de Usuario</h6>
                                  <div class="pl-lg-4">
                                    
                                    <!-- 1ra Fila -->
                                    <div class="row">
                                      
                                      <!-- Nombre de Usuario -->  
                                      <div class="col-lg-6">   
                                        <div class="form-group focused">
                                          <label  style="color:#2dc997" for="input-username">Nombre de Usuario</label>
                                          <input type="text" name="username" class="form-control form-control-alternative" placeholder="Ingresar nombre de usuario" value="<?php echo $_SESSION['username']; ?>" require/>
                                        </div>
                                      </div>
                                      <!-- /Nombre de Usuario -->
                                      
                                      <!-- Correo Electronico -->
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label  style="color:#2dc997" for="input-email">Correo Electronico</label>
                                          <input type="email" name="email" class="form-control form-control-alternative" placeholder="Ingresar correo electronico"  value="<?php echo $params[1]['email']; ?>" require/>
                                        </div>
                                      </div>
                                      <!-- /Correo Electronico -->
                                    
                                    </div>
                                    <!-- /1ra Fila -->
                                    <!-- 2da Fila -->
                                    <div class="row">

                                      <!-- Nombre -->
                                      <div class="col-lg-4">
                                        <div class="form-group focused">
                                          <label style="color:#2dc997" for="input-first-name">Nombre</label>
                                          <input type="text" name="name" class="form-control form-control-alternative" placeholder="Ingresar nombre(s)"  value="<?php echo $params[1]['nombre']; ?>" require/>
                                        </div>
                                      </div>
                                      <!-- /Nombre -->
                                      
                                      <!-- Apellido -->
                                      <div class="col-lg-4">
                                        <div class="form-group focused">
                                          <label style="color:#2dc997" for="input-last-name">Apellido</label>
                                          <input type="text" name="lastName" class="form-control form-control-alternative" placeholder="Ingresar apellido(s)"  value="<?php echo $params[1]['apellido']; ?>" require/>
                                        </div>
                                      </div>
                                      <!-- /Apellido -->
                                      
                                      <!-- Contraseña -->
                                      <div class="col-lg-4">
                                        <div class="form-group focused">
                                          <label style="color:#2dc997" for="input-last-name">Contraseña</label>
                                          <input type="password" id="password" name="password" class="form-control form-control-alternative" placeholder="Ingresar contraseña"  value="<?php echo $params[1]['password']; ?>" require/>
                                          <div>
                                            <input type="checkbox" id="showPassword" title="Click para mostrar contraseña"/>
                                              &nbsp;&nbsp;Mostrar Contraseña
                                          </div>
                                        </div>
                                      </div>
                                      <!-- /Contraseña -->
                                      
                                    </div>              
                                    <!-- /2da Fila -->

                      
                    </div>
                    <hr class="my-4">

                    <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-address">Telefono</label>
                            <input name="telefono" class="form-control form-control-alternative" placeholder="Telefono"  value=" +502 52364178 " type="text"/>
                          </div>
                        </div>
                      </div>

                    </div>
                    <hr class="my-4">



                </div>
              </div>

              <div class="col-4 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Guardar</button>
                                      </div>
                </form>




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

    <section id="inicio">
      <div>
        <div class="container-fluid mt--7" >
          <div class="row">
            <div class="col-xl-4 order-xl-1 mb-5 mb-xl-0" style="margin-top: 250px;margin-left: 10%;">
              <div class="card card-profile shadow">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="img/perfil.jpg" class="rounded-circle">
                      </a>
                    </div>
                  </div>
                </div>
                  <div class="card-body pt-0 pt-md-4" style="margin-top:50px;">
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                        

                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h3>
                      Luis Ruiz  <span class="font-weight-light"> <br> Batz</span>
                    </h3>
                    <div class="h5 mt-4">
                      <i class="ni business_briefcase-24 mr-2"></i>Historiador
                    </div>


                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-6 order-xl-2" style="margin-top: 250px;">
                
            </div>
          </div>
        </div>
      </div>

    </div>
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
