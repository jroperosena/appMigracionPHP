<?php


require ("../clases/enrutamiento.php");
$enrutar = new servicioRutas();


 if (isset($_GET[opc]))
    $contenido= $enrutar->Ruta($_GET[opc]);

   
if (isset($_GET[subOpc]))
    $Subcontenido =$enrutar->SubRuta($_GET[subOpc]);


require ("../vista/layout.php")

?>
