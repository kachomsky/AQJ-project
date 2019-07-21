<!DOCTYPE html>
<html>
  <?php include __DIR__."/head.html"; ?>

  <body>


  	<?php include __DIR__."/header.php"; ?>

  	
  	<?php if(isset($_SESSION['user'])): ?>
  	<div class="container">
  		<h1>Selecciona el apartado a gestionar: </h1>
	  	<div class="row menuHome">
		  	<a href="index.php?action=gestion-juego" class="homeSeleccionLink">
			  	<div class="panel panel-default seccionPanel">
				    <div class="panel-body">
				  		<div class="col-sm-4 imageCol"><img src="<?php echo __IMG_REL_PATH__.'juegosIcon.png'; ?>" class="img-responsive"/></div>
				  		<p class="textoSeccion">En este apartado podras gestionar todo el contenido referente a los juegos: buscar juegos, añadirlos, modificarlos o eliminarlos.</p>
				  	</div>
				 </div>
			</a>
			<div class="panel panel-default seccionPanel">
			    <div class="panel-body">
		  			<div height="20" width="20" class="col-sm-4 imageCol"><img src="<?php echo __IMG_REL_PATH__.'usuarios.png'; ?>" class="img-responsive"/></div>

		  			<p class="textoSeccion">En este apartado podras gestionar todo el contenido referente a los usuarios: buscar usuarios, bloquearlos, desbloquear usuarios o modificar la información de sus perfiles.</p>
		  		</div>
		  	</div>
		</div>
	</div>
	<?php else:
			echo "Debes iniciar sesión para ver el contenido.";
			endif;
	?>
	<?php
    	include __DIR__.'/footer.html';
	?>
	
  </body>
</html>
