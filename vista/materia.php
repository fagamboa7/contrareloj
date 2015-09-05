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
        include '../control/verificainstructor.php';
        
        ?>
         <form action="manejamateria.php" method="POST">
            
            <input type="number" name="idmateria" placeholder="ingrese código materia"><br>
            <input type="text" name="nombremateria" placeholder="ingrese nombre materia"><br>
            <input type="submit" name="accion" value="Guardar">
             <input type="submit" name="accion" value="Consultar">
            
        </form>
         <form action="../control/cerrarSesion.php" method="POST">
            
            <input type="submit" name="accion" value="Cerrar sesión">
            
        </form>
    </body>
</html>
