

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Departamento</th>
    </tr>
  </thead>
  <tbody>

<?php 
/*
echo "<pre>";
var_dump($lista);
echo "</pre>";
*/


$i=0;
foreach($lista as $item) {
    $i++;
    
    // inicio  a fila de datos 
     echo"<tr>";
     echo"<th scope='row'> $i </th>";
     echo"<td>".$item['nombre']."</td>";
     echo"<td>".$item['apellido']."</td>";
     echo"<td>".$item['correo']."</td>";
     echo"<td>".$item['telefono']."</td>";
     echo"<td>".$item['direccion']."</td>";
     echo"<td>".$item['departamento']."</td>";
     echo"</tr>";
 // final  na fila de datos 


}

?>

    
  </tbody>
</table>

