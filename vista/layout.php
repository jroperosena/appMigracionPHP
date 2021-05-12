<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet"   type="text/css"  href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
 

</head>

<body>

    <!- Menu Ppal ->

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="#"> <img src="../assets/pic/logoSena.png" class="rounded-circle" alt="" width="70px"> </a>
      <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse letra" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           <!-- inicio intem -->
           <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
           <!-- final intem -->

            <!-- inicio intem -->
            <li class="nav-item active">
            <a class="nav-link" href="../controlador/rutaControlador.php?opc=1">Nosotros <span class="sr-only">(current)</span></a>
          </li>
           <!-- final intem -->

             <!-- inicio intem -->
            
           <!-- final intem -->


          
           <!-- inicio intem -->
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Datos Prueba Faker 
            </a>
            <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../controlador/fakerListaUsuariosControlador.php">Listar 10 Usuarios</a>
       
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../controlador/fakerInsertarUsuariosControlador.php">Insertar 10 Usuarios</a>
              
            </div>
          </li>
           <!-- final intem -->

          <!-- inicio intem -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Datos de Excel
            </a>
            <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../controlador/leerExcelControlador.php">Leer Excel</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../controlador/leerExcelInsertarMysqlControlador.php">Excel a Mysql</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../controlador/leerCSVcontrolador.php">Leer CSV</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../controlador/leerCSVInsertarMysqlcontrolador.php">CSV a Msql</a>
    
             
            </div>
          </li>
          <!-- final intem -->
        
          
          
        </ul>
      
      </div>
    </nav>

    <!- Final Menu Ppal ->
    
     </header>


  <main>
    <div class="container-fluid">

      <div class="row d-flex justify-content-center ">


<?php 


if (!isset($contenido))
   $contenido="home.php";

require $contenido;

?>


      </div>
    </div>




  </main>


  <footer class="bg-primary">
    
    <!-- inicio -->

    <div class="card-deck p-3">
      
      <div class="card p-3">
        <img class="card-img-top ico" src="../assets/pic/logotipo-de-github.svg" alt="Card image cap">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>

     

      



    </div>

    
    <!-- fin -->
  
  </footer>



    <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>