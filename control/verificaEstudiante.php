<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
        
        if ($_SESSION['rol']!= "estudiante") {
            
            header('Location: ../vista/inicio.php');            
            
        }
        
        session_id($_SESSION['nombre']);
        echo 'Bienvenido estudiante: '.$_SESSION['nombre']."<br>";
        $idsesion = session_id();
        echo $idsesion." es su variable de sesión";
        
    $ahora = time();  
    $tiempo_transcurrido = $ahora- $_SESSION["ultimoAcceso"];   

    if($tiempo_transcurrido >= 600) {  
    session_unset();
    session_destroy(); // destruyo la sesión
     
    echo '<script language="javascript"> confirm("sesión finalizada por inactividad");'
    . 'window.location= "../vista/inicio.php"</script>';

  
    }else{
        $_SESSION["ultimoAcceso"]= time();
    }
    
   