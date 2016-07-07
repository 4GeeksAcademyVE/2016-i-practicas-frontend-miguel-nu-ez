<?php
//SI EL NUMERO ES MULTIPLO DE 3 IMPRIMIR TIC
//SI EL NUMERO ES MULTIPLO DE 5 IMPRIMIR TOC
//SI EL NUMERO ES MULTIPLO DE 3 Y 5 IMPRIMIR TICTOC
//SINO IMPRIMIR CUALQUIER NUMERO.

	$i=0;
	while($i <= 100) {
		if ($i%3 == 0 && $i%5 == 0){
			//TICTOC
			$salida='TicToc';
		}
		elseif($i%3 == 0){
			//TIC
			$salida='Tic';
		}
		elseif($i%5 == 0){
			//TOC
			$salida='Toc';
		}
		else{
			//NUMERO 
			$salida=$i;
		}
		echo $salida."\n";
		$i++;
	}
?>