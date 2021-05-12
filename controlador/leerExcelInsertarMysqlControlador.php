<?php

require_once '../modelo/gestionDatosMysqli.php';
$datos = new servicioDatos();

$borrar = $datos->resetTabla("ciudad");

require_once'../PHPExcel/Classes/PHPExcel/IOFactory.php';

$FileExcel = PHPExcel_IOFactory::load('../Fuentes/XLSX/tablaPoblaciones.xlsx');

$Hoja= $FileExcel->getActiveSheet()->toArray(null,true,true,true);


$con=0;
foreach ($Hoja as $Fila=>$Celda) {
$con++;
  if ($con>1) {
    $datos = new servicioDatos();
    $insertar = $datos->setCiudad($Celda['A'], $Celda['B']);
  }
}
 

$datos = new servicioDatos();
$lista = $datos->getDatos("ciudad");

$contenido="tablaCiudadArray.php";
require("../vista/layout.php");

?>