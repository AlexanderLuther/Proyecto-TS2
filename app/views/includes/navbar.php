<header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li <?php if($params['currentMenu'] == 0) echo 'class="menu-active"'; ?> > <a href= <?php echo URL_PATH; ?> style="color: white;font-size: 23px;"><strong>TIEMPO</strong> MAYA</a></li>
          <li <?php if($params['currentMenu'] == 1) echo 'class="menu-active"'; ?> > <a href="lineaDeTiempo">Linea de Tiempo</a></li>
          <li <?php if($params['currentMenu'] == 2) echo 'class="menu-active"'; ?>> <a href="calendarioHaab">Calendario Haab</a></li>
          <li <?php if($params['currentMenu'] == 3) echo 'class="menu-active"'; ?> > <a href="calendarioCholquij">Calendario Cholq'ij</a></li>
          <li <?php if($params['currentMenu'] == 4) echo 'class="menu-active"'; ?>> <a href="#">Rueda Calendarica</a></li>
          <li <?php if($params['currentMenu'] == 5) echo 'class="menu-active"'; ?>> <a href="nahual">Nahuales</a></li>
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

