<?php 

$conn = PdoDB::getInstance();

function anadirCategoriaAndTipo($juegos, $conn){

	foreach($juegos as $index => $juego){
		$tipo = $conn->buscarTipoPorId($juego['idTipo']);
		$juegos[$index]['NombreTipo'] = $tipo['Nombre'];
		$categoria = $conn->buscarCategoriaPorId($juego['idCategoria']);
		$juegos[$index]['NombreCategoria'] = $categoria['NombreCategoria'];
	}

	return $juegos;
}

function cargarPaginaGestionJuegos($conn){
	$juegos = $conn->obtenerTodosJuegos();
	$juegos = anadirCategoriaAndTipo($juegos, $conn);

	include __DIR__."/../views/gestionJuegos.php";
}

if(isset($_GET['opcion'])){
	$opcion = $_GET['opcion'];
	//Para ir al formulario de anadir juego
	if($opcion == 0){
		$tipos = $conn->obtenerTodosTipos();
		$categorias = $conn->obtenerTodasCategorias();
		
		include __DIR__."/../views/anadirJuego.php";

	//Para recargar la tabla de juegos.
	}else if($opcion == 1){
		//Si le pasamos un nombre de juego buscaremos el juego y recargaremos la tabla
		if(isset($_GET['nombreJuego'])){
			$nombreJuego = $_GET['nombreJuego'];
			$juegos = $conn->searchJuegos($nombreJuego);
			$juegos = anadirCategoriaAndTipo($juegos, $conn);
		//Si le pasamos una id de un juego eliminaremos ese juego y recargaremos la tabla
		}elseif(isset($_GET['idJuego'])){
			$idJuego = $_GET['idJuego'];
			$conn->eliminarJuego($idJuego);
			$juegos = $conn->obtenerTodosJuegos();
			$juegos = anadirCategoriaAndTipo($juegos, $conn);

		}else{
			echo "Debes introducir un juego";
		}

		include __DIR__."/../views/tablaJuegos.php";
	}else if($opcion == 2){
		//TODO: cargar plantilla modificar juego
		if(isset($_GET['idJuegoMod'])){
			$idJuego = $_GET['idJuegoMod'];
			$juego = $conn->buscarJuegoPorId($idJuego);
			$tipos = $conn->obtenerTodosTipos();
			$categorias = $conn->obtenerTodasCategorias();
			$tipo = $conn->buscarTipoPorId($juego['idTipo']);
			$categoria = $conn->buscarCategoriaPorId($juego['idCategoria']);
			$juego['NombreTipo'] = $tipo['Nombre'];
			$juego['NombreCategoria'] = $categoria['NombreCategoria'];

			include __DIR__."/../views/modificarJuego.php";
		}
	}else{
		cargarPaginaGestionJuegos($conn);
	}
}else{
	cargarPaginaGestionJuegos($conn);
}	

?>