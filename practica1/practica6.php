<?php

// Declaracion de la clase 
class Contacto{ // (siempre en mayusculas la primera letra de cada palabra)
	// ----------------------------
	// Declaracion de los atributos
	// ----------------------------
	/*
		Private: que no pueden accederse directamente
				sino desde una funcion del objeto.
	*/
	private $nombre;
	private $apellido;
	private $numero;
	
	// Funcion que permite instanciar el objeto de la clase
	public function __construct(){
		// $this hace referencia al mismo objeto
		// $this->nombre se refiere al atributo nombre del propio objeto
		$this->nombre = "";
		$this->apellido = "";
		$this->numero = "";
	}
	// ----------------------------
	// Declaracion de los metodos
	// ----------------------------

	/* 
		public: que pueden accederse libremente desde el objeto
		setNombre($param): permite establecer el atributo 'nombre' con el 
							valor recibido en el parametro $nombre
	*/
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	// getNombre: permite obtener el valor contenido en el atributo 'nombre'
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

// Instanciacion de un nuevo objeto de tipo 'Contacto'
$contacto = new Contacto();

echo "Ingrese nombre: ";
$nombre = trim(fgets(STDIN));
$contacto->setNombre($nombre);
echo "Ingrese Apellido: ";
$apellido = trim(fgets(STDIN));
$contacto->setApellido($apellido);

echo "Ingrese Telefono: ";
$numero = trim(fgets(STDIN));
$contacto->setNumero($numero);

echo "Nombre:" . $contacto->getNombre()."\n";
echo "Apellido:" . $contacto->getApellido()."\n";
echo "Telefono:" . $contacto->getNumero()."\n";

var_dump($contacto);

?>