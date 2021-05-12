

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">1</th>
      <th scope="col">2</th>

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
  
  foreach($item as $i) {
    $j++;

    // aca hacer la conversión necesaria 
    
    // inicio  a fila de datos 
     echo"<tr>";
     echo"<th scope='row'> $j </th>";
     echo"<td>".$i['0']."</td>";
     echo"<td>".$i['1']."</td>";
     echo"<td>".$i['2']."</td>";
     echo"<td>".$i['3']."</td>";
     echo"<td>".$i['4']."</td>";
     echo"<td>".$i['5']."</td>";

     echo"</tr>";
 // final  na fila de datos 



}
}




?>

    
  </tbody>
</table>

