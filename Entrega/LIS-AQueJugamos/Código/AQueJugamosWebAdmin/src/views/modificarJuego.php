<div class="container">
	  <h2>Panel modificar juego:</h2>
	  <div class="panel panel-default">
	    <div class="panel-body">
	    	<form action="index.php?action=modificar-juego" method="post" name="signup">
			  <div class="form-group">
			    <label for="nombreJuego">Nombre:</label>
			    <input value="<?php echo $juego['NombreJuego'];?>" name="nombreJuego" type="form-text" class="form-control" id="nombreJuego" placeholder="Introduce el nombre">
			    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
			  </div>
			  <div class="form-group">
			    <label for="dificultad">Dificultad:</label>
			    <select value="<?php echo $juego['Dificultad'];?>" name="dificultad" class="form-control">			    	
			    	<option value="1">1</option>
			    	<option value="2">2</option>
			    	<option value="3">3</option>
			    	<option value="4">4</option>
			    	<option value="5">5</option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="nombreJuego">Duración (minutos):</label>
			    <input value="<?php echo $juego['Tiempo'];?>" name="duracion" type="text" class="form-control" id="duracion" placeholder="Introduce la duración">	
			  </div>

			  <div class="form-group">
			    <label for="edad">Edad:</label>
			    <input value="<?php echo $juego['Edad'];?>" name="edad" type="number" class="form-control" id="edad" placeholder="Introduce la edad">	
			  </div>

			  <div class="form-group">
			    <label for="tipo">Tipo:</label>
			    <select id="selectTipo" name="tipo" class="form-control">
			    	<option value="<?php echo $juego['idTipo'];?>" selected hidden>
			    		<?php echo $juego['NombreTipo'];?>		
			    	</option>
			    	<?php foreach($tipos as $tipo): ?>
			    		<option value="<?php echo $tipo['idTipo']; ?>">
			    			<?php echo $tipo['Nombre']; ?>			    			
			    		</option>
			    	<?php endforeach; ?>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="categoria">Categoria:</label>
			    <select id="selectCategoria" name="categoria" class="form-control">
			    	<option value="<?php echo $juego['idCategoria'];?>" selected hidden>
			    		<?php echo $juego['NombreCategoria'];?>			    
			    	</option>
			    	<?php foreach($categorias as $categoria): ?>
			    		<option value="<?php echo $categoria['idCategoria']; ?>">
			    			<?php echo $categoria['NombreCategoria']; ?>			    		
			    		</option>
			    	<?php endforeach; ?>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="numeroJugadores">Número de jugadores:</label>
			    <input value="<?php echo $juego['Jugadores'];?>" name="numeroJugadores" type="text" class="form-control" id="jugadores" placeholder="Introduce el número de jugadores">	
			  </div>

			  <div class="form-group">
			    <label for="descripcion">Descripción:</label>
			    <textarea name="descripcion" class="form-control" rows="5" id="comment"><?php echo $juego['Descripcion'];?></textarea>
			  </div>			  

			  <input type="hidden" name="idJuego" id="idJuego" value="<?php echo $juego['idJuego']; ?>" />
			  <!--<div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>-->
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	    </div>
	  </div>
	</div>