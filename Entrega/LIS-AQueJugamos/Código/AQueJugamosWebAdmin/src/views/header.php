<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="index.php">A qué jugamos</a>

    </div>
    <?php if(isset($_SESSION['user'])): ?>
    <ul class="nav navbar-nav">

      <!--<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestión de juegos
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?action=anadir-juego&opcion=0">Añadir juego</a></li>          
          <li><a href="index.php?action=anadir-juego&opcion=1">Modificar juego</a></li>
          <li><a href="index.php?action=anadir-juego&opcion=2">Eliminar juego</a></li>
        </ul>
      </li>-->
      <li><a href="index.php?action=gestion-juego">Gestión de juegos</a></li>
      <li><a href="#">Gestión de usuarios</a></li>
    </ul>
    <?php endif; ?>
    <ul class="nav navbar-nav navbar-right">
      
      <?php if(isset($_SESSION['user'])): ?>
        <li><a href="index.php?action=sign-up"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>

        <li><a href="index.php?action=logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>

        <li><a href="index.php?action=profile"><span class="glyphicon glyphicon-cog"></span>Perfil</a></li>

      <?php else: ?>
        <li><a href="index.php?action=login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      <?php endif;?>

    </ul>
  </div>
</nav>