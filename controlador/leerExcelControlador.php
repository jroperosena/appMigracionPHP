<?php

require_once'../PHPExcel/Classes/PHPExcel/IOFactory.php';

$FileExcel = PHPExcel_IOFactory::load('../Fuentes/XLSX/tablaClientes.xlsx');

$Hoja= $FileExcel->getActiveSheet()->toArray(null,true,true,true);




$contenido="verHojaExcel.php";

require("../Vista/layout.php");

?>