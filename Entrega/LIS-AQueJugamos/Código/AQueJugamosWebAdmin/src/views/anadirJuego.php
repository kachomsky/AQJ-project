<script type="text/javascript" src="src/views/resources/js/register.js"></script>
<div class="container">
	  <h2>Panel añadir juego:</h2>
	  <div class="panel panel-default">
	    <div class="panel-body">
	    	<form action="index.php?action=anadir-juego" id="anadir-juego-form" method="post" name="signup">
			  <div class="form-group">
			    <label for="nombreJuego">Nombre:</label>
			    <input name="nombreJuego" type="form-text" class="form-control" id="nombreJuego" placeholder="Introduce el nombre">
			    <span class="help-block" id="error"></span>
			    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
			  </div>
			  <div class="form-group">
			    <label for="dificultad">Dificultad:</label>
			    <select name="dificultad" class="form-control">
			    	<option value="" selected disabled hidden>Selecciona la dificultad</option>
			    	<option value="1">1</option>
			    	<option value="2">2</option>
			    	<option value="3">3</option>
			    	<option value="4">4</option>
			    	<option value="5">5</option>
			    </select>
			    <span class="help-block" id="error"></span>
			  </div>

			  <div class="form-group">
			    <label for="duracion">Duración (minutos):</label>
			    <input name="duracion" type="text" class="form-control" id="duracion" placeholder="Introduce la duración">	
			    <span class="help-block" id="error"></span>
			  </div>

			  <div class="form-group">
			    <label for="edad">Edad:</label>
			    <input name="edad" type="number" class="form-control" id="edad" placeholder="Introduce la edad">
			    <span class="help-block" id="error"></span>	
			  </div>

			  <div class="form-group">
			    <label for="tipo">Tipo:</label>
			    <select id="selectTipo" name="tipo" class="form-control">
			    	<option value="" selected disabled hidden>Selecciona el tipo</option>
			    	<?php foreach($tipos as $tipo): ?>
			    		<option value="<?php echo $tipo['idTipo']; ?>"><?php echo $tipo['Nombre']; ?></option>
			    	<?php endforeach; ?>
			    </select>
			    <span class="help-block" id="error"></span>
			  </div>

			  <div class="form-group">
			    <label for="categoria">Categoria:</label>
			    <select id="selectCategoria" name="categoria" class="form-control">
			    	<option value="" selected disabled hidden>Selecciona la categoria</option>
			    	<?php foreach($categorias as $categoria): ?>
			    		<option value="<?php echo $categoria['idCategoria']; ?>"><?php echo $categoria['NombreCategoria']; ?></option>
			    	<?php endforeach; ?>
			    </select>
			    <span class="help-block" id="error"></span>
			  </div>

			  <div class="form-group">
			    <label for="numeroJugadores">Número de jugadores:</label>
			    <input name="numeroJugadores" type="number" class="form-control" id="numeroJugadores" placeholder="Introduce el número de jugadores">	
			    <span class="help-block" id="error"></span>
			  </div>

			  <div class="form-group">
			    <label for="descripcion">Descripción:</label>
			    <textarea name="descripcion" class="form-control" rows="5" id="comment"></textarea>
			  </div>
			  <!--<div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>-->
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	    </div>
	  </div>
	</div>