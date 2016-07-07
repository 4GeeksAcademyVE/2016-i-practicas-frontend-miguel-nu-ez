<?php

function mensaje($msg){
	echo $msg."\n";
}
function iniciarJuego(){
	$opcion=0;
	
		echo "############################################\n";
		echo "##----1.- PIEDRA--------------------------##\n";
		echo "##----2.- PAPEL---------------------------##\n";
		echo "##----3.- TIJERA--------------------------##\n";
		echo "##----4.- LAGARTO-------------------------##\n";
		echo "##----5.- SPOCK---------------------------##\n";
		echo "############################################\n";
		echo "##----6.- REGRESAR------------------------##\n";
		echo "############################################\n";
		echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
		
		
	while($opcion!=6){
		
		$vals = trim(fgets(STDIN));
		
		switch($vals){
			case 1:
				mensaje("Seleccionaste Piedra");
				break;
			case 2:
				mensaje("Seleccionaste Papel");
				break;
			case 3:
				mensaje("Seleccionaste Tijera");
				break;
			case 4:
				mensaje("Seleccionaste Lagarto");
				break;
			case 5:
				mensaje("Seleccionaste Spock");
				break;	
			case 6:
				
					echo "############################################\n";
					echo "##----------------MENU--------------------##\n";
					echo "############################################\n";
					echo "##----1.- INICIAR JUEGO-------------------##\n";
					echo "##----2.- SALIR---------------------------##\n";
					echo "############################################\n";
					echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
				return true;
				break;				
			default:
				mensaje("Seleccione una Opcion");
				break;
		}
	}
}

menu();

function menu(){
	$option=0;

		echo "############################################\n";
		echo "##----------------MENU--------------------##\n";
		echo "############################################\n";
		echo "##----1.- INICIAR JUEGO-------------------##\n";
		echo "##----2.- SALIR---------------------------##\n";
		echo "############################################\n";
		echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
		
	while($option!=2){
		
		$val = trim(fgets(STDIN));
		
		switch($val){
			case 1:
				iniciarJuego();
				break;
			case 2:
				$option = 2;
				break;
			default:
				mensaje("Seleccione una Opcion");
				break;
		}
	}
}
?>