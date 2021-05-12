<?php

// vamos a administrar o gestionar los datos a la base de datos 
require 'conexionMysqli.php';

class servicioDatos extends Conexion
 {

    public function __construct() {
         parent::__construct();
   }


   
   public function setPedido($id, $idCliente , $fechaPedido , $idFormaPago , $descuento , $estadoEmviado ) {
      $sql = "INSERT INTO pedido (id, idCliente, fechaPedido, idFormaPago, descuento , estadoEmviado ) VALUES ('$id', '$idCliente' , '$fechaPedido' , '$idFormaPago' , '$descuento' , '$estadoEmviado')";
 
      $rta = $this->conexion->query($sql);
 
      if ($rta) {
         $this->conexion->close();
          return true;
      }else {
         $this->conexion->close();
         return false;
      }
 
    }


   public function setCiudad($id, $nombre ) {
      $sql = "INSERT INTO ciudad (id, nombre ) VALUES ('$id', '$nombre')";
 
      $rta = $this->conexion->query($sql);
 
      if ($rta) {
         $this->conexion->close();
          return true;
      }else {
         $this->conexion->close();
         return false;
      }
 
    }


   public function setUsuario($nombre, $apellido ,$correo , $telefono,$direccion, $departamento) {
     $sql = "INSERT INTO usuario (nombre, apellido ,correo , telefono,direccion, departamento) VALUES ('$nombre', '$apellido' ,'$correo' , '$telefono','$direccion', '$departamento')";

     $rta = $this->conexion->query($sql);

     if ($rta) {
        $this->conexion->close();
         return true;
     }else {
        $this->conexion->close();
        return false;
     }

   }

   public function getDatos($tabla){
		$restultado=$this->conexion->query('SELECT * FROM '.$tabla);
		$datos = $restultado->fetch_all(MYSQLI_ASSOC);
		return $datos;
	}


   public function resetTabla($tabla) {
      $sql = "TRUNCATE $tabla";
 
      $rta = $this->conexion->query($sql);
 
      if ($rta) {
         $this->conexion->close();
          return true;
      }else {
         $this->conexion->close();
         return false;
      }
 
    }







 }

?>

