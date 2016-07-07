<?php
//SI EL NUMERO ES MULTIPLO DE 3 IMPRIMIR TIC
//SI EL NUMERO ES MULTIPLO DE 5 IMPRIMIR TOC
//SI EL NUMERO ES MULTIPLO DE 3 Y 5 IMPRIMIR TICTOC
//SINO IMPRIMIR CUALQUIER NUMERO.

	$i=0;
	while($i <= 100) {
		switch ($i) {
			case ($i%3 == 0 && $i%5 == 0):
				//TICTOC
				$salida='TicToc';
				break;
			case ($i%3 == 0):
				//TIC
				$salida='Tic';
				break;
			case ($i%5 == 0):
				//TOC
				$salida='Toc';
				break;
			default:
				//NUMERO
				$salida=$i;
				break;
		}
		echo $salida."\n";
		$i++;
	}
?>