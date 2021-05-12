
<!-- inicio tabla -->

<table class="table">
  <thead>
    <tr>
     <th scope="col">No</th>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">E</th>
      <th scope="col">F</th>
    </tr>
  </thead>
  <tbody>
<?php 
$con=0;
foreach ($Hoja as $Fila=>$Celda) {
$cont++;
   echo" <tr>";
   echo"   <th scope='row'>$cont</th>";
   echo"   <td> ".$Celda['A']."</td>";
   echo"   <td> ".$Celda['B']."</td>";
   echo"   <td> ".$Celda['C']."</td>";
   echo"   <td> ".$Celda['D']."</td>";
   echo"   <td> ".$Celda['E']."</td>";
   echo"   <td> ".$Celda['F']."</td>";

   echo" </tr>";
}
?>
  </tbody>
</table>

