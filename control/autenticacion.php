<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../persistencia/conexion.php';
require_once '../persistencia/conexionfull.php';

$idusuario = $_POST['idusuario'];
$pass = $_POST['pass'];

$objconexion = new conexionFull();

$sentenciaconsultapass = "select passusuarios
 from `materias`.`usuarios`
where `usuarios`.`idusuarios` = '".$idusuario."';";

$arreglo = $objconexion->consultarallnum($sentenciaconsultapass);
$passbd = $arreglo[0][0];

if ($passbd != $pass) {
    header('Location: ../vista/inicio.php');

}
session_start();

$sentenciaconsultarol = "select nombreusuarios, rolusuarios 
 from `materias`.`usuarios`
where `usuarios`.`idusuarios` = '".$idusuario."';";

$arreglo = $objconexion->consultarallnum($sentenciaconsultarol);
$nombreusuario = $arreglo[0][0];
$rol = $arreglo[0][1];

$_SESSION['nombre'] = $nombreusuario;
$_SESSION['rol'] = $rol;

$_SESSION['ultimoAcceso'] = time();



if ($_SESSION['rol']== "estudiante") {
    header('Location: ../vista/estudiante.php');
}

if ($_SESSION['rol']== "instructor") {
    header('Location: ../vista/materia.php');
}

if ($_SESSION['rol']== "notas") {
    header('Location: ../vista/nota.php');
}

 
