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
       
        <form action="manejaestudiante.php" method="POST">
            
            <input type="number" name="idestudiante" placeholder="ingrese código"><br>
            <input type="text" name="nombres" placeholder="ingrese nombres"><br>
            <input type="text" name="apellidos" placeholder="ingrese apellidos"><br>
            <input type="submit" name="accion" value="Guardar">
            <input type="submit" name="accion" value="Consultar">
        </form>
        
    </body>
</html>
