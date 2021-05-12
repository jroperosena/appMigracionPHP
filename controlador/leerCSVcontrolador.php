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


/*

echo "<pre>";
var_dump($lista);
echo "</pre>";

foreach($lista as $item) {
  
  foreach($item as $i) {
  echo $i['0']. "   ";
  echo $i['1']. "<br>";

}
}
*/


$contenido="tablaGenerica.php";

require("../vista/layout.php");

?>