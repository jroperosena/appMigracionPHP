<?php
$linea = 0;
//Abrimos nuestro archivo
$lista=[];

$archivo = fopen("../Fuentes/CSV/tablaPedidos.csv", "r");
//Lo recorremos
while (($datos = fgetcsv($archivo, ",")) == true) 
{
  $num = count($datos);
  $linea++;
  //Recorremos las columnas de esa linea
 
  
  for ($columna = 0; $columna < $num; $columna++) 
      {

        $obj = array($columna => $datos);

         
     }
     array_push($lista ,  $obj );
}
//Cerramos el archivo
fclose($archivo);



require_once '../modelo/gestionDatosMysqli.php';
$datos = new servicioDatos();

$borrar = $datos->resetTabla("pedido");


foreach($lista as $item) {
  
    foreach($item as $i) {
      $j++;

      if ($j>1) {
        $datos = new servicioDatos();

        // aca hacer la conversión necesaria 

        $insertar = $datos->setPedido($i['0'], $i['1'],$i['2'],$i['3'],$i['4'],$i['5']);
      }


    }
}




$datos = new servicioDatos();
$lista = $datos->getDatos("pedido");

$contenido="tablaPeidoArray.php";
require("../vista/layout.php");

?>