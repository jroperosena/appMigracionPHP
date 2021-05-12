<?php

// solo lista un numero determinado de personas 


require '../clases/persona.php';

$lista =  array();

require_once '../Faker/src/autoload.php';
$faker = Faker\Factory::create('es_VE');


// definimos la cantiad de usuarios a mostrar //
for ($i = 0; $i < 10 ; $i ++) {

    //$insertarUsuario = new servicioDatos();

$nom = $faker->firstName;
$ape = $faker->lastName;
$cor = $faker->email;
$cel = $faker->phoneNumber;
$dir = $faker->address;
$dep = $faker->state;

$myPersona = new Persona($nom,$ape,$cor,$cel,$dir,$dep);


array_push($lista, $myPersona);

//$insertar = $insertarUsuario->setUsuario($nombre, $apellido ,$correo , $telefono,$direccion, $departamento);

}

 // guardar en el json la lista
 $jsonString = json_encode($lista);
 $lista= json_decode($jsonString, true);

$contenido="tablaUsuariosArray.php";

require("../vista/layout.php");

?>