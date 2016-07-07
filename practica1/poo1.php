<?php

class Contacto {

	private $nombre;
	private $apellido;
	private $numero;

	public function __construct(){
		$this->nombre = "";
		$this->apellido = "";
		$this->numero = "";
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getNumero(){
		return $this->numero;
	}
}

$lista = [];

$seguir = "";
while ($seguir!= "N"){

	

    $contacto = new Contacto();

	echo "\n";
	echo "Ingrese nombre: ";
	$nombre = trim(fgets(STDIN));
	$contacto->setNombre($nombre);
	echo"\n";
	echo "Ingrese Apellido: ";
	$apellido = trim(fgets(STDIN));
	$contacto->setApellido($apellido);
	echo "\n";
	echo "Ingrese Telefono: ";
	$numero = trim(fgets(STDIN));
	$contacto->setNumero($numero);
	echo"\n";
	array_push ($lista , $contacto);

echo"Desea agregar otro contacto? S/N. Precione N para finalizar \n";
    $seguir = trim(fgets(STDIN));
}
var_dump($lista);
?>