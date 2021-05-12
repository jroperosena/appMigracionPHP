<?php


require 'configuracion.php';

class Conexion
{
	public $conexion;
      

	public function __construct()
	{

		
		$this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if ($this->conexion->connect_errno) { 
			echo " no se pudo conectar " . $this->conexion->connect_error;
			return;
		} 
		$this->conexion->set_charset(DB_CHARSET);
		
		

      


	}
}

?>   


