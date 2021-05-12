

<table class="table">
  <thead>
    <tr>
     
      <th scope="col">ID</th>
      <th scope="col">Ciudad</th>

    </tr>
  </thead>
  <tbody>

<?php 
/*
echo "<pre>";
var_dump($lista);
echo "</pre>";
*/



foreach($lista as $item) {

    
    // inicio  a fila de datos 
     echo"<tr>";
  
     echo"<td>".$item['id']."</td>";
     echo"<td>".$item['nombre']."</td>";
    
     echo"</tr>";
 // final  na fila de datos 


}

?>

    
  </tbody>
</table>

