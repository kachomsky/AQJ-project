<?php
$idJuego = $_POST['idJuego'];

$nombreJuego = $_POST['nombreJuego'];

$dificultad = $_POST['dificultad'];

$duracion = $_POST['duracion'];

$tipo = $_POST['tipo'];

$categoria = $_POST['categoria'];

$numeroJugadores =  $_POST['numeroJugadores'];

$descripcion = $_POST['descripcion'];

$edad = $_POST['edad'];

$conn = PdoDB::getInstance();

$modifyCorrecto = $conn->modificarJuego($nombreJuego, $dificultad, $edad, $duracion, $tipo, $categoria, $numeroJugadores, $descripcion, $idJuego);

if($modifyCorrecto){
	header('Location: index.php?action=gestion-juego&insert=1');
}else{
	header('Location: index.php?action=gestion-juego&insert=0');
}

?>