<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../control/verificaNotas.php';
        
        ?>
         <form action="../control/manejanota.php" method="POST">
             Estudiantes: 
             <?php
                 echo '<select name="idestudiante">';
                 require_once '../persistencia/conexion.php';
                 require_once '../persistencia/conexionfull.php';
                 $objconexion = new conexion();
                 $arreglo = $objconexion->consultar("select estudiante.idestudiante, estudiante.nombres, estudiante.estudiantecol from `materias`.`estudiante`;");
                 $numfilas = count($arreglo);
                  for ($i=0; $i<$numfilas; $i++){
                         echo "<option value='".$arreglo[$i][0]."'>".$arreglo[$i][1]." ".$arreglo[$i][2]."</option>";
                                                }
                         echo '</select><br>';
                 ?>
             Materias: 
            <?php
                 echo '<select name="idmateria">';
                  require_once '../persistencia/conexion.php';
                 require_once '../persistencia/conexionfull.php';
                 $objconexion = new conexion();
                 $arreglo = $objconexion->consultar("select materia.idmateria, materia.materiacol from `materias`.`materia`;");
                 $numfilas = count($arreglo);
                  for ($i=0; $i<$numfilas; $i++){
                   echo "<option value='".$arreglo[$i][0]."'>".$arreglo[$i][1]."</option>";
                                                }
                   echo '</select><br>';                 
                 ?>
            <input type="text" name="nota" placeholder="ingrese nota"><br>
            <input type="submit" name="accion" value="Guardar">
             <input type="submit" name="accion" value="Consultar">
            
        </form>
         <form action="../control/cerrarSesion.php" method="POST">
            
            <input type="submit" name="accion" value="Cerrar sesión">
            
        </form>
    </body>
</html>
