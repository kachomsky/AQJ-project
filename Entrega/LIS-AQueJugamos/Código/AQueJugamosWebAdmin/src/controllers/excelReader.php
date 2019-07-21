<?php

	use PhpOffice\PhpSpreadsheet\IOFactory;
	if($_FILES["juegos_excel"]["tmp_name"]){
		$inputFileName = $_FILES["juegos_excel"]["tmp_name"];
		$conn = PdoDB::getInstance();
		$spreadsheet = IOFactory::load($inputFileName);
		$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
		//var_dump($sheetData);

		echo "*** con el 1 ***";
		echo $sheetData[1]["A"];
		echo $sheetData[1]["B"];

		echo "*** con el 2 ***";
		echo $sheetData[2]["A"];
		echo $sheetData[2]["B"];



		$insertadoCorrectamente = false;
		$size = count($sheetData);
		$countInserts = 0;

		for($index = 2; $index <= $size;$index++){
				
				$nombreJuego = $sheetData[$index]["A"];
				$dificultad = $sheetData[$index]["B"];
				$edad = $sheetData[$index]["C"];
				$duracion = $sheetData[$index]["D"];
				$tipo = $sheetData[$index]["E"];
				$categoria = $sheetData[$index]["F"];
				$numeroJugadores = $sheetData[$index]["G"];
				$descripcion = $sheetData[$index]["H"];
				$imagen = $sheetData[$index]["I"];
				$materiales = $sheetData[$index]["J"];
				$insertadoCorrectamente = $conn->insertarJuego($nombreJuego, $dificultad, $edad, $duracion, $tipo, $categoria, $numeroJugadores, $descripcion, $imagen, $materiales);

				if($insertadoCorrectamente){
					$countInserts++;
				}			
		} 
	}else{
		$ficheroNoExiste = 1;
	}

	if($countInserts == ($size-1)){		
		header('Location: index.php?action=gestion-juego&insert=1');
	}else{
		header('Location: index.php?action=gestion-juego&insert=0');
	}

?>
