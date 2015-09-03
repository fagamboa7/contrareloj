<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'conexion.php';

$idestudiante = $_POST['idestudiante'];
$idmateria = $_POST['idmateria'];
$nota = $_POST['nota'];
$accion = $_POST['accion'];

$objconexion = new conexion();

if($accion=="Guardar"){
$sentenciainsert = "INSERT INTO `materias`.`notas`(`idestudiante`,`idmateria`,`valornota`)
VALUES('".$idestudiante."','".$idmateria."','".$nota."');";

$objconexion = new conexion();
$res = $objconexion->ejecutar($sentenciainsert);
echo "Se ingreso correctamente ".$res." registro en la base de datos";
}

if($accion=="Consultar"){
    $sentenciaconsulta = "select * from `materias`.`notas`;";
    $arreglo = $objconexion->consultar($sentenciaconsulta);
    mostrar($arreglo);
}

function mostrar($inarreglo) {
    $numfilas = count($inarreglo);
    echo "<table border = '1' style='width:100%'>";
    for ($i=0; $i<$numfilas; $i++){
        echo "<tr>";
        $numcolumnas = count($inarreglo[$i]);
        for ($j=0; $j<$numcolumnas; $j++){
            echo "<td>";
            echo $inarreglo[$i][$j];
            echo "</td>";
        }
        echo "</tr>";;
    }
    echo "</table>";
}