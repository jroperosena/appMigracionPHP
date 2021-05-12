<div class="card-deck p-3">
      
      <div class="card p-3">
        <img class="card-img-top" src="../assets/pic/foto.jpg" alt="Card image cap">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <h5 class="card-title">Nombre Integrante</h5>
          <p class="card-text">Descripcion</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">mas carreta del integrante redes sociales cuenta de git hub etc</small>
         
          <a class="nav-link" href="../controlador/rutaControlador.php?opc=1&subOpc=1">Registro</a>
          <br>
          <a class="nav-link" href="../controlador/rutaControlador.php?opc=1&subOpc=2">ir a Notas</a>

        </div>
      </div>

      <div class="card p-3">

      <?php 


    if (!isset($Subcontenido))
     $Subcontenido="card.php";

    require $Subcontenido;

?>

      
      </div>

      <div class="card p-3">
        <img class="card-img-top" src="../assets/pic/foto.jpg" alt="Card image cap">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <h5 class="card-title">Nombre Integrante</h5>
          <p class="card-text">Descripcion</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">mas carreta del integrante redes sociales cuenta de git hub etc</small>
        </div>
      </div>

     

      



    </div>