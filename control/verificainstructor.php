<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
        
        if ($_SESSION['rol']!= "instructor") {
            
            header('Location: ../vista/inicio.php');            
            
        }
      session_id($_SESSION['nombre']);
        echo 'Bienvenido estudiante: '.$_SESSION['nombre']."<br>";
        $idsesion = session_id();
        echo $idsesion." es su variable de sesión";