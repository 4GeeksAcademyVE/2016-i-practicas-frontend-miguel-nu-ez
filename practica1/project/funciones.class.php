<?php
// Clase con metodos estaticos
class Functions{
	// static hace que la funcion se pueda acceder desde la clase, sin instanciar el objeto
	
	public static function ordenarArray($arr) {
		
		/*function swap(&$arr, $a, $b) {
			$tmp = $arr[$a];
			$arr[$a] = $arr[$b];
			$arr[$b] = $tmp;
		}*/
		
		$size = count($arr);
		for ($i=0; $i<$size; $i++) {
			for ($j=0; $j<$size-1-$i; $j++) {
				if ($arr[$j+1]->getPrioridad() < $arr[$j]->getPrioridad()) {
					//swap($arr, $j, $j+1);
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $tmp;
				}
			}
		}
		return $arr;
	}
	
	public static function ordenarArrayFecha($arr) {
		
		/*function swapII(&$arr, $a, $b) {
			$tmp = $arr[$a];
			$arr[$a] = $arr[$b];
			$arr[$b] = $tmp;
		}*/
	
		$size = count($arr);
		for ($i=0; $i<$size; $i++) {
			for ($j=0; $j<$size-1-$i; $j++) {
				if ($arr[$j+1]->getFecha() < $arr[$j]->getFecha()) {
					//swapII($arr, $j, $j+1);
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $tmp;
				}
			}
		}
		return $arr;
	}

}
?>