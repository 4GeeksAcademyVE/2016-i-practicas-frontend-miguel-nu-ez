<?php
//Calcular la suma de todos los multiplos
//de 3 o 5 menores que 100
	$suma_or=0;
	$suma_and=0;
	for($i = 3; $i < 100 ; $i++) {
		
		//Operador ternario
		//Condicion               Caso Verdadero.   Caso falso
		($i%3 == 0 || $i%5 == 0) ? $suma_and += $i:"";
		
		//Condicional IF
		switch ($i%3 == 0 || $i%5 == 0) {
			case true:
				$suma_or = $suma_or + $i;
				break;
		}
	}
	echo "La suma de or: ".$suma_or."\n";
	echo "La suma de and: ".$suma_and."\n";
?>