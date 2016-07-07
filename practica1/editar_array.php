<?php
$base = array("naranja", "plátano", "manzana", "frambuesa");
$reemplazos = array(0 => "piña", 4 => "cereza");

$cesta = array_replace($base, $reemplazos);
print_r($cesta);

$reemplazos2 = array(0 => "uva");

$cesta = array_replace($base, $reemplazos, $reemplazos2);
print_r($cesta);
?>