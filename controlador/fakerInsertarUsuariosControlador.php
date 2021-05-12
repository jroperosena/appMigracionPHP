<?php

// inerta  un numero determinado de personas  a la base de datos

require_once '../modelo/gestionDatosMysqli.php';
$datos = new servicioDatos();


require_once '../Faker/src/autoload.php';
$faker = Faker\Factory::create('es_VE');

$borrar = $datos->resetTabla("usuario");


for ($i = 0; $i < 10 ; $i ++) {
  
    $datos = new servicioDatos();
  
$nom = $faker->firstName;
$ape = $faker->lastName;
$cor = $faker->email;
$cel = $faker->phoneNumber;
$dir = $faker->address;
$dep = $faker->state;



$insertar = $datos->setUsuario($nom, $ape ,$cor , $cel,$dir, $dep);

}

$datos = new servicioDatos();
$lista = $datos->getDatos("usuario");

$contenido="tablaUsuariosArray.php";

require("../Vista/layout.php");

?>