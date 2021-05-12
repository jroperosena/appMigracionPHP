

<table class="table">
  <thead>
    <tr>
     
      <th scope="col">ID</th>
      <th scope="col">ID Cliente</th>
      <th scope="col">Fecha Pedido</th>
      <th scope="col">Forma Pago</th>
      <th scope="col">Descuento</th>
      <th scope="col">Estado Envio</th>

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
     echo"<td>".$item['idCliente']."</td>";
     echo"<td>".$item['fechaPedido']."</td>";
     echo"<td>".$item['idFormaPago']."</td>";
     echo"<td>".$item['descuento']."</td>";
     echo"<td>".$item['estadoEmviado']."</td>";
    
     echo"</tr>";
 // final  na fila de datos 


}

?>

    
  </tbody>
</table>

