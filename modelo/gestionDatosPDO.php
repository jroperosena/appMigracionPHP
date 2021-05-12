<?php

// vamos a administrar o gestionar los datos a la base de datos 
require 'conexion.php';

class servicioDatos extends Conexion
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function getDatos(){

		
		
		
   
		$sql = "SELECT * FROM clientes"; 
		$restultado=$this->conexion->query($sql);
		$restultado->execute(array());
		$datos = $restultado->fetchAll(PDO::FETCH_ASSOC);
		$restultado->closeCursor();
		return $datos;
		$this->conexion=null;
	

	}

   
   public function setDatos($nombre, $estado){


   	$sql = "INSERT INTO clientes (nombre, estado)
     VALUES ('".$nombre."', '".$estado."')";



     $restultado=$this->conexion->query($sql);
     if ($restultado) {
            return true;
        } else {
            return false;
        }
       $this->conexion=null;
       
     
   }


}

?>

