<!DOCTYPE html>
<html>
  <?php include __DIR__."/head.html"; ?>

  <body>

  	<?php include __DIR__."/header.php"; ?>

	<div class = "container">
		<div class="wrapper">
			
			<form action="" method="post" name="Login_Form" class="form-signin">       
			    <h3 class="form-signin-heading">Bienvenido! Inicia sesión:</h3>
				  <hr class="colorgraph"><br>
				  
				  <input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
				  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
				 
				  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
			</form>			
		</div>


		<?php if($error == 1): ?>
			<div class="alert alert-danger">
			  <strong>Error!</strong> Usuario o contraseña incorrectos.
			</div>
		<?php elseif($error == 2):?>
			<div class="alert alert-danger">
			  <strong>Error!</strong> El usuario introducido no ha sido registrado.
			</div>
		<?php else: 
				if(isset($_SESSION['user'])): ?>
			<div class="alert alert-success">
			  <strong>Correcto!</strong> <?php echo $_SESSION['user']['Nombre'] ?> has iniciado sesión correctamente.
			</div>
		<?php endif; endif; ?>


	</div>

	<?php
    	include __DIR__.'/footer.html';
	?>
	
  </body>
</html>
