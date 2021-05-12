

<?php
/* echo "<pre>";
var_dump($lista);
echo "</pre>";
*/
echo"<table>";
foreach($lista as $item){
   
    echo"<tr>";
    echo"<td>".$item->nombre."</td>";
    echo"<td>".$item->apellido."</td>";
    echo"</tr>";

   }
   echo"</table>";

?>

