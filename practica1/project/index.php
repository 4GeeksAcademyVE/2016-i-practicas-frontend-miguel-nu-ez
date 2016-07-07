<?php

include 'tarea.class.php';
include 'funciones.class.php';

function menuSistema(){
$lista = [];
$opcion = 0;
while($opcion != 8){
	
			echo "############################################\n";
			echo "##----------------MENU--------------------##\n";
			echo "############################################\n";
			echo "##----1.- AGREGAR TAREA-------------------##\n";
			echo "##----2.- IMPRIMIR LISTADO(TODAS)---------##\n";
			echo "##----3.- ELIMINAR REGISTRO---------------##\n";
			echo "##----4.- MARCAR TAREA REALIZADA----------##\n";
			echo "##----5.- IMPRIMIR LISTADO(PEND)----------##\n";
			echo "##----6.- ORDENAR POR PRIORIDAD(PEND)-----##\n";
			echo "##----7.- ORDENAR POR FECHA(PEND)---------##\n";
			echo "##----8.- SALIR---------------------------##\n";
			echo "############################################\n";
			echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
			
		$val = trim(fgets(STDIN));
		switch ($val) {
			case 1:
					$seguir = "";
					while ($seguir!= "N"){
		
						$tarea = new Actividad();
						$tarea->agregarTarea();
						$tarea->mostrarTarea();
					
						echo"\n";
						array_push ($lista , $tarea);

						echo "Desea agregar otra Tarea? Precione cualquier tecla o Precione N para finalizar \n";
						$seguir = trim(fgets(STDIN));
					}
				break;
			case 2:
				$x;
				if (count($lista) <> 0) {
					echo "ID" . " | " . "ASUNTO" . " | " . "FECHA" . " | " . "PRIORIDAD" . " | " . "ESTADO" . "\n";
					for($i = 0; $i < count($lista) ; $i++) {
							echo $x = $i + 1 . " | " . $lista[$i]->getAsunto() . " | " . $lista[$i]->getFecha() . " | " . $lista[$i]->getPrioridad() . " | " . $lista[$i]->getEstado() . "\n";
						}
				}
				else
				{
					echo "No hay registros para Imprimir"."\n";
				}
				break;	
			case 3:
				$x;
				if (count($lista) <> 0) {
					$del;
					echo "Indique el ID de la Tarea a Eliminar \n";
					$del = trim(fgets(STDIN));
					$del = $del - 1;
					array_splice($lista,$del,1);
					
					if (count($lista) <> 0) {
						echo "Se mostrara el nuevo Listado... \n";
						echo "ID" . " | " . "ASUNTO" . " | " . "FECHA" . " | " . "PRIORIDAD" . " | " . "ESTADO" . "\n";
						for($i = 0; $i < count($lista) ; $i++) {
								echo  $x = $i + 1 . " | " . $lista[$i]->getAsunto() . " | " . $lista[$i]->getFecha() . " | " . $lista[$i]->getPrioridad() . " | " . $lista[$i]->getEstado() . "\n";
							}
					}
					else
					{
						echo "Ya no posee Registros"."\n";
					}
				}
				else
				{
					echo "Ya no posee Registros para Eliminar"."\n";
				}

				break;
			case 4:
				$x;
				if (count($lista) <> 0) {
					$edit;
					echo "Indique el ID de la Tarea a Marcar como Realizada \n";
					$edit = trim(fgets(STDIN));
					$edit = $edit - 1;
					$lista[$edit]->setEstado("R");
					echo "Se mostrara el nuevo Listado... \n";
					echo "ID" . " | " . "ASUNTO" . " | " . "FECHA" . " | " . "PRIORIDAD" . " | " . "ESTADO" . "\n";
					for($i = 0; $i < count($lista) ; $i++) {
							echo  $x = $i + 1 . " | " . $lista[$i]->getAsunto() . " | " . $lista[$i]->getFecha() . " | " . $lista[$i]->getPrioridad() . " | " . $lista[$i]->getEstado() . "\n";
						}
				}
				else
				{
					echo "No posee Tareas Registradas para Marcarlas como Realizada"."\n";
				}
				break;
			case 5:
				$x;
				if (count($lista) <> 0) {
					echo "ID" . " | " . "ASUNTO" . " | " . "FECHA" . " | " . "PRIORIDAD" . " | " . "ESTADO" . "\n";
					for($i = 0; $i < count($lista) ; $i++) {
							if ($lista[$i]->getEstado() == "P") {
								echo $x = $i + 1 . " | " . $lista[$i]->getAsunto() . " | " . $lista[$i]->getFecha() . " | " . $lista[$i]->getPrioridad() . " | " . $lista[$i]->getEstado() . "\n";
							}
						}
				}
				else
				{
					echo "No hay registros para Imprimir"."\n";
				}
				break;	
			case 6:
			
				$arr2=[];
				$arr2 = Functions::ordenarArray($lista);
				
				if (count($lista) <> 0) {
					echo "ASUNTO" . " | " . "FECHA" . " | " . "PRIORIDAD" . " | " . "ESTADO" . "\n";
					for($i = 0; $i < count($lista) ; $i++) {
							if ($arr2[$i]->getEstado() == "P") {
								echo $arr2[$i]->getAsunto() . " | " . $arr2[$i]->getFecha() . " | " . $arr2[$i]->getPrioridad() . " | " . $arr2[$i]->getEstado() . "\n";
							}
						}
				}
				else
				{
					echo "No hay registros para Imprimir"."\n";
				}
				
				break;
			case 7:
			
				$arr2=[];
				$arr2 = Functions::ordenarArrayFecha($lista);
				
				if (count($lista) <> 0) {
					echo "ASUNTO" . " | " . "FECHA" . " | " . "PRIORIDAD" . " | " . "ESTADO" . "\n";
					for($i = 0; $i < count($lista) ; $i++) {
							if ($arr2[$i]->getEstado() == "P") {
								echo $arr2[$i]->getAsunto() . " | " . $arr2[$i]->getFecha() . " | " . $arr2[$i]->getPrioridad() . " | " . $arr2[$i]->getEstado() . "\n";
							}
						}
				}
				else
				{
					echo "No hay registros para Imprimir"."\n";
				}
				
				break;
			case 8:
				$opcion = 8;
				break;
		}
	}
}

menuSistema();

?>