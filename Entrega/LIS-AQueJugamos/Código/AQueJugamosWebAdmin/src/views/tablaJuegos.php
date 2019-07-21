<!-- TABLA CON DATOS DE JUEGO -->
	<div class="container">
	  <h3>Resultado de la búsqueda:</h3>
	        
	  <table class="table table-condensed">
	    <thead>
	      <tr>
	        <th>Nombre</th>
	        <th>Categoria</th>
	        <th>Tipo</th>
	        <th>Dificultad</th>
	        <th>Edad</th>
	        <th>Jugadores</th>	        
	        <th>Tiempo</th>
	        <th>Valoración</th>
	        <th>Materiales</th>
	        <th>Descripcion</th>
	        <th>Modificar</th>
	        <th>Eliminar</th>
	      </tr>
	    </thead>
	    <tbody>	    	
	      	<?php foreach($juegos as $juego): ?>
		      <tr>
		        <td><?php echo $juego['NombreJuego']; ?></td>
		        <td><?php echo $juego['NombreCategoria']; ?></td>
		        <td><?php echo $juego['NombreTipo']; ?></td>
		        <td><?php echo $juego['Dificultad']; ?></td>
		        <td><?php echo $juego['Edad']; ?></td>
		        <td><?php echo $juego['Jugadores']; ?></td>
		        <td><?php echo $juego['Tiempo']; ?></td>
		        <td><?php echo $juego['Valoracion']; ?></td>
		        <td><?php echo $juego['Materiales']; ?></td>
		        <td><?php echo $juego['Descripcion']; ?></td>
		        <td>
		        	<span data-value="<?php echo $juego['idJuego']; ?>" class="glyphicon glyphicon-pencil modificarJuego" id="modificarJuego"/>
		        </td>
		        <td>
		        	<span data-value="<?php echo $juego['idJuego']; ?>" class="glyphicon glyphicon-remove eliminarJuego" id="eliminarJuego" />	  
		        </td>
		      </tr>
	  		<?php endforeach; ?>	 
	    </tbody>
	  </table>
	</div>