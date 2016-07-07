<?php 
function menu(){
$opcion = 0;
while($opcion != 2){
	
			echo "############################################\n";
			echo "##----------------MENU--------------------##\n";
			echo "############################################\n";
			echo "##----1.- INICIAR JUEGO-------------------##\n";
			echo "##----2.- SALIR---------------------------##\n";
			echo "############################################\n";
			echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
			
		$val = trim(fgets(STDIN));
		switch ($val) {
			case 1:
				playPptls();
				break;
			case 2:
				$opcion = 2;
				break;
		}
	}
}
menu();
function playPptls(){
	
	//Genero Array de Opciones
	$option = ["PIEDRA","PAPEL","TIJERA","LAGARTO","SPOCK"];

	$maquina = array_rand($option);

	echo "############################################\n";
	echo "##----0.- PIEDRA--------------------------##\n";
	echo "##----1.- PAPEL---------------------------##\n";
	echo "##----2.- TIJERA--------------------------##\n";
	echo "##----3.- LAGARTO-------------------------##\n";
	echo "##----4.- SPOCK---------------------------##\n";
	echo "############################################\n";
	echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
	
	$jugador = trim(fgets(STDIN));
	
		if($jugador < 0 || $jugador > 4){
			
			echo "############################################\n";
			echo "##----0.- PIEDRA--------------------------##\n";
			echo "##----1.- PAPEL---------------------------##\n";
			echo "##----2.- TIJERA--------------------------##\n";
			echo "##----3.- LAGARTO-------------------------##\n";
			echo "##----4.- SPOCK---------------------------##\n";
			echo "############################################\n";
			echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
			
		}
		else{
			
			if($jugador == 0){
				if ($maquina == 2 || $maquina == 3){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS GANADO"."\n";
				}
				elseif ($maquina == 1 || $maquina == 4){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS PERDIDO"."\n";
				}
				elseif ($maquina == 0){ 
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAY EMPATE"."\n";
				}
			}
			if($jugador == 1){
				if ($maquina == 0 || $maquina == 4){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS GANADO"."\n";
				}
				elseif($maquina == 2 || $maquina == 3){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS PERDIDO"."\n";
				}
				elseif($maquina == 1){ 
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAY EMPATE"."\n";
				}	
			}
			if($jugador == 2){
				if ($maquina == 1 || $maquina == 3){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS GANADO"."\n";
				}
				elseif($maquina == 0 || $maquina == 4){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS PERDIDO"."\n";
				}
				elseif($maquina == 2){ 
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAY EMPATE"."\n";
				}
			}
			if($jugador == 3){
				if ($maquina == 1|| $maquina == 4){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS GANADO"."\n";
				}
				elseif($maquina == 2 || $maquina == 0){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS PERDIDO"."\n";
				}
				elseif($maquina == 3){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAY EMPATE"."\n";
				}
			}
			if($jugador == 4){
				if ($maquina == 2 || $maquina == 0){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS GANADO"."\n";
				}
				elseif($maquina == 1 || $maquina == 3){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAS PERDIDO"."\n";
				}
				elseif($maquina == 4){
					echo "HAS SELECCIONADO: ". $option[$jugador]."\n";
					echo "LA MAQUINA SELECCIONO: ". $option[$maquina]."\n";
					echo "EL RESULTADO ES: "."\n";
					echo "HAY EMPATE"."\n";
				}
			}
		}
}

?>