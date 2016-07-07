<?php
$numero_par=4;
$numero_impar=3;

function sumar($num1, $num2){
	return $num1 + $num2;
}
function restar($num1, $num2){
	return $num1 - $num2;
}
function multiplicar($num1, $num2){
	return $num1 * $num2;
}
function dividir($num1, $num2){
	return $num1 / $num2;
}
echo sumar($numero_par,$numero_impar)."\n";
echo restar($numero_par,$numero_impar)."\n";
echo multiplicar($numero_par,$numero_impar)."\n";
echo dividir($numero_par,$numero_impar)."\n";

?>