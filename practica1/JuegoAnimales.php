<?php
function menuSistema(){
$opcion = 0;
while($opcion != 3){
	
			echo "############################################\n";
			echo "##----------------MENU--------------------##\n";
			echo "############################################\n";
			echo "##----1.- INICIAR JUEGO-------------------##\n";
			echo "##----2.- ANIMALES DISPONIBLES------------##\n";
			echo "##----3.- SALIR---------------------------##\n";
			echo "############################################\n";
			echo "##-------POR FAVOR INDIQUE UNA OPCION-----##\n";
			
		$val = trim(fgets(STDIN));
		switch ($val) {
			case 1:
				playAnimales();
				break;
			case 2:
				animalesDisponibles();
				break;	
			case 3:
				$opcion = 2;
				break;
		}
	}
}

menuSistema();

function playAnimales(){
	
	echo "El animal tiene 4 patas? (S/N) \n";
	$r1= trim(fgets(STDIN));
	if( $r1== "S") {
		echo "Vive en una granja? (S/N) \n";
		$r2= trim(fgets(STDIN));
		if($r2== "S"){
			echo "El animal produce leche consumible? (S/N) \n";
			$r3= trim(fgets(STDIN));
			if($r3== "S") {
				echo "El animal posee manchas blanco y negro? (S/N) \n";
				$r4= trim(fgets(STDIN));
				if($r4== "S") {
					echo "EL ANIMAL ES UNA VACA \n";
				}else{
					echo "EL ANIMAL ES UNA CABRA \n";
				}
			}else{
				echo "El animal es Rosado? (S/N) \n";
				$r5 = trim(fgets(STDIN));
				if ($r5=="S"){
					echo "EL ANIMAL ES UN CERDO \n";
				}else{
					echo "EL ANIMAL ES UN CABALLO \n";
				}
			}
		}else{
			echo "El animal vive en zonas polares? (S/N) \n";
			$r6=trim(fgets(STDIN));
			if ($r6=="S"){
				echo "El animal tiene menos de un metro de largo?(S/N) \n";
				$r7=trim(fgets(STDIN));
				if ($r7=="S"){
					echo "EL ANIMAL ES UN ZORRO ARTICO \n";
				}else{
					echo "EL ANIMAL ES UN OSO POLAR \n";
				}
			}else{
				echo "El animal es un roedor?(S/N) \n";
				$r8=trim(fgets(STDIN));
				if ($r8=="S"){
					echo "EL ANIMAL ES UN HAMSTER \n";
				}else{
					echo "EL ANIMAL ES UN ZORRO \n";
				}
			}
		}
		
	}else{
		echo "Tiene el animal solo 2 patas?(S/N) \n";
		$r9=trim(fgets(STDIN));
		if ($r9=="S"){
			echo "Vive en Sudamerica?(S/N) \n";
			$r10=trim(fgets(STDIN));
			if ($r10=="S"){
				echo "Tiene el cuello largo?(S/N) \n";
				$rp11=trim(fgets(STDIN));
				if ($r11=="S"){
					echo "EL ANIMAL ES UN FLAMINGO \n";
				}else{
					echo "EL ANIMAL ES UN BUITRE \n";
				}
			}else{
				echo "Es un Ave Domestica y se puede Consumir?(S/N) \n";
				$r12=trim(fgets(STDIN));
				if($r12=="S"){
					echo "EL ANIMAL ES UNA GALLINA \n";
				}else{
					echo "EL ANIMAL ES UN AVESTRUZ \n";
				}
			}
		}else{
			echo "El animal tiene patas o extremidades? (S/N) \n";
			$r13=trim(fgets(STDIN));
			if($r13=="S"){
				echo "El animal vive en Corales Marinos? (S/N) \n";
				$r14=trim(fgets(STDIN));
				if($r14=="S"){
					echo "EL ANIMAL ES UNA ESTRELLA DEL MAR \n";
				}else{
					echo "EL ANIMAL ES UNA TARANTULA \n";
				}
			}else{
				echo "El animal vive en el Mar? (S/N) \n";
				$r15=trim(fgets(STDIN));
				if($r15=="S"){
					echo "EL ANIMAL ES UN DELFIN \n";
				}else{
					echo "EL ANIMAL ES UNA COBRA \n";
				}
			}
		}
	}
}
function animalesDisponibles(){
			echo "############################################\n";
			echo "##------------ANIMALES--------------------##\n";
			echo "############################################\n";
			echo "##----- AVESTRUZ--------------------------##\n";
			echo "##----- BUITRE----------------------------##\n";
			echo "##----- CABALLO---------------------------##\n";
			echo "##----- CABRA-----------------------------##\n";
			echo "##----- CERDO-----------------------------##\n";
			echo "##----- COBRA-----------------------------##\n";	
			echo "##----- DELFIN----------------------------##\n";
			echo "##----- ESTRELLA DEL MAR------------------##\n";
			echo "##----- FLAMINGO--------------------------##\n";	
			echo "##----- GALLINA---------------------------##\n";				
			echo "##----- HAMSTER---------------------------##\n";	
			echo "##----- LOBO ARTICO-----------------------##\n";
			echo "##----- OSO POLAR-------------------------##\n";
			echo "##----- TARANTULA-------------------------##\n";
			echo "##----- VACA------------------------------##\n";		
			echo "##----- ZORRO-----------------------------##\n";		
			echo "############################################\n";
}

?>