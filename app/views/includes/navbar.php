<header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li <?php if($params[0]['currentMenu'] == 0) echo 'class="menu-active"'; ?> > <a href= <?php echo URL_PATH; ?> style="color: white;font-size: 23px;"><strong>TIEMPO</strong> MAYA</a></li>
          <li <?php if($params[0]['currentMenu'] == 1) echo 'class="menu-active"'; ?> > <a href="lineaDeTiempo">Linea de Tiempo</a></li>
          <li <?php if($params[0]['currentMenu'] == 2) echo 'class="menu-active"'; ?>> <a href="calendarioHaab">Calendario Haab</a></li>
          <li <?php if($params[0]['currentMenu'] == 3) echo 'class="menu-active"'; ?> > <a href="calendarioCholquij">Calendario Cholq'ij</a></li>
          <li <?php if($params[0]['currentMenu'] == 4) echo 'class="menu-active"'; ?>> <a href="#">Rueda Calendarica</a></li>
          <li <?php if($params[0]['currentMenu'] == 5) echo 'class="menu-active"'; ?>> <a href="nahual">Nahuales</a></li>
          <?php 
          if (isset($_SESSION['username'])) {
            if($params[0]['currentMenu'] == 8){
              echo '<li class="menu-active"><a href="perfil">Perfil</a></li>
                    <li><a href="sesion/logout">Cerrar Sesion</a></li>';
            } else{
              echo '<li><a href="perfil">Perfil</a></li>
                    <li><a href="sesion/logout">Cerrar Sesion</a></li>';
            }
          }else{
            if($params[0]['currentMenu'] == 6){
              echo '<li class="menu-active"> <a href="iniciarSesion">Iniciar Sesion</a></li>
              <li><a href="signUp">Registrarse</a></li>';
            } else if($params[0]['currentMenu'] == 7){
              echo '<li> <a href="iniciarSesion">Iniciar Sesion</a></li>
              <li class="menu-active"><a href="signUp">Registrarse</a></li>';
            } else{
              echo '<li> <a href="iniciarSesion">Iniciar Sesion</a></li>
              <li><a href="signUp">Registrarse</a></li>';
            }
          }
          ?>
        </ul>
      </nav>
    </div>
</header>

