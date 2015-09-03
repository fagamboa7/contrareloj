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
        session_start();
        
        if ($_SESSION['rol']!= "estudiante") {
            
            header('Location: ../vista/inicio.php');            
            
        }
        session_id($_SESSION['nombre']);
        echo 'Bienvenido estudiante: '.$_SESSION['nombre']."<br>";
        $idsesion = session_id();
        echo $idsesion." es su variable de sesión";
        
        ?>
       
        <form action="../control/manejaestudiante.php" method="POST">
            
            <input type="number" name="idestudiante" placeholder="ingrese código"><br>
            <input type="text" name="nombres" placeholder="ingrese nombres"><br>
            <input type="text" name="apellidos" placeholder="ingrese apellidos"><br>
            <input type="submit" name="accion" value="Guardar">
            <input type="submit" name="accion" value="Consultar">
        </form>
        
    </body>
</html>
