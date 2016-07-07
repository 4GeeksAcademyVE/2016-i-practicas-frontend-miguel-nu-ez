<?php
class Tareas {

	private $asunto;
	private $fecha;
	private $prioridad;
	private $estado;

	public function __construct(){
		$this->asunto = "";
		$this->fecha = "";
		$this->prioridad = "";
		$this->estado = "";
	}

	public function setAsunto($asunto){
		$this->asunto = $asunto;
	}

	public function getAsunto(){
		return $this->asunto;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setPrioridad($prioridad){
		$this->prioridad = $prioridad;
	}

	public function getPrioridad(){
		return $this->prioridad;
	}
	
	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getEstado(){
		return $this->estado;
	}
}
class Actividad extends Tareas{
	public function __construct(){
	}
	public function agregarTarea(){

		echo "\n";	
		echo "Ingrese Asunto: ";
		$asunto = trim(fgets(STDIN));
		$this->setAsunto($asunto);

		echo"\n";
		echo "Ingrese Fecha (YYYY-MM-DD): ";
		
		$opcion = 0;
		
		while($opcion!=true){
			
			$fecha = trim(fgets(STDIN));
			$opcion = checkData($fecha);

			switch ($opcion) {
				case true:
					$this->setFecha($fecha);
					break;
				case 0:
					echo "Fecha Invalida. Ingrese Fecha (YYYY-MM-DD) Nuevamente: \n";
					$opcion = 0;
					break;
			}
		}

		echo "\n";
		echo "Ingrese Prioridad (Importante [1, 2 , 3, 4, 5] No importante): ";
		$prioridad = trim(fgets(STDIN));
		$this->setPrioridad($prioridad);

		echo "\n";
		echo "Ingrese Estado (pendiente [P], realizada [R]): ";
		$estado = trim(fgets(STDIN));
		$this->setEstado($estado);

	}
	
	public function mostrarTarea(){
		echo "Datos de la Tarea:\n";
		echo "Asunto: " . $this->getAsunto() . "\n" . "Fecha:" . $this->getFecha() . "\n" . "Prioridad: " . $this->getPrioridad() . "\n" . "Estado: " . $this->getEstado() . "\n";		
	}
	
}

function checkData($mydate) { 
       
    list($yy,$mm,$dd) = explode("-",$mydate); 
	
    if (is_numeric($yy) && is_numeric($mm) && is_numeric($dd)) 
    { 
        return checkdate($mm,$dd,$yy); 
    } 
    return 0;            
} 
?>