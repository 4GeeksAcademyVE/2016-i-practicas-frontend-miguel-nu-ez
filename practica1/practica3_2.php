<?php
function mensaje($msg){
	echo $msg;
}
function iniciarJuego(){
	mensaje("Iniciando Juego...");
}
function listarAnimales(){
	$opt=0;
	while($opt!=3){
		echo "############################################\n";
		echo "##----1.- TIGRE---------------------------##\n";
		echo "##----2.- LEON----------------------------##\n";
		echo "##----3.- REGRESAR AL MENU----------------##\n";
		echo "############################################\n";

		$val = trim(fgets(STDIN));
		
		switch($val){
			case 1:
				system('cls');
				mensaje("EL TIGRE");
				break;
			case 2:
				system('cls');
				mensaje("EL LEON");
				break;
			case 3:
				system('cls');
				menu();
				break;
			default:
				system('cls');
				mensaje("Seleccione una Opcion");
				break;	
		}
	menu();
	}
}
menu();
function menu(){
	$opcion=0;
	while($opcion!=4){
		
		echo "############################################\n";
		echo "##----------------MENU--------------------##\n";
		echo "############################################\n";
		echo "##----1.- INICIAR JUEGO-------------------##\n";
		echo "##----2.- ANIMALES DISPONIBLES------------##\n";
		echo "##----3.- AUTOR---------------------------##\n";
		echo "##----4.- SALIR---------------------------##\n";
		echo "############################################\n";
		echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
		
		$val = trim(fgets(STDIN));
		
		switch($val){
			case 1:
				system('cls');
				iniciarJuego();
				break;
			case 2:
				system('cls');
				listarAnimales();
				break;
			case 3:
				system('cls');
				mensaje("Opcion 3");
				break;
			case 4:
				system('cls');
				$opcion = 4;
				break;
			default:
				system('cls');
				mensaje("Seleccione una Opcion");
				break;
		}
		
	system('cls');
	}
}
?>