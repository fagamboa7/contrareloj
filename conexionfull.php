<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author fausto
 */
class conexionFull {

    //put your code here
    private $host = "localhost";
    private $usuario = "adsi";
    private $pass = "adsi750669";
    private $dbname = "usuarios";
    private $puerto = "3306";
    private $conex;

    function __construct() {
        $this->conex = new mysqli($this->host, $this->usuario, $this->pass, $this->dbname, $this->puerto);
        if ($this->conex->connect_errno) {
            echo "Fallo al conectar a MySQL: " . $this->conex->connect_error;
        }
        //echo 'Conexión establecida';
    }

    public function ejecutar($insentencia) {

        $this->conex->query($insentencia);
        $resultado = $this->conex->affected_rows;
        return $resultado;
    }

    public function consultarrow($insentencia) {
        $datos = $this->conex->query($insentencia);
        $i = 0;
        while ($fila = $datos->fetch_row()) {
            $arreglo[$i] = $fila;
            $i++;
        }
        return $arreglo;
    }
    
    public function consultarasoc($insentencia) {
        $datos = $this->conex->query($insentencia);
        $i = 0;
        while ($fila = $datos->fetch_assoc()) {
            $arreglo[$i] = $fila;
            $i++;
        }
        var_dump($arreglo);
        return $arreglo;
    }

    public function consultararraynum($insentencia) {
        $datos = $this->conex->query($insentencia);
        $i = 0;
        while ($fila = $datos->fetch_array(MYSQLI_NUM)) {
            $arreglo[$i] = $fila;
            $i++;
        }
        return $arreglo;
    }

    public function consultararrayasoc($insentencia) {
        $datos = $this->conex->query($insentencia);
        $i = 0;
        while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {
            $arreglo[$i] = $fila;
            $i++;
        }
        //var_dump($arreglo);
        return $arreglo;
    }
    
    public function consultararrayboth($insentencia) {
        $datos = $this->conex->query($insentencia);
        $i = 0;
        while ($fila = $datos->fetch_array(MYSQLI_BOTH)) {
            $arreglo[$i] = $fila;
            $i++;
        }
        //var_dump($arreglo);
        return $arreglo;
    }
    
    public function consultarallnum($insentencia) {
        
        $datos = $this->conex->query($insentencia);
        
        $arreglo = $datos->fetch_all(MYSQLI_NUM);
        //var_dump($arreglo);
        return $arreglo;
    }
    
    public function consultarallasoc($insentencia) {
        
        $datos = $this->conex->query($insentencia);
        
        $arreglo = $datos->fetch_all(1);
        var_dump($arreglo);
        return $arreglo;
    }

    
     public function consultarallboth($insentencia) {
        
        $datos = $this->conex->query($insentencia);
        
        $arreglo = $datos->fetch_all(MYSQLI_BOTH);
        var_dump($arreglo);
        return $arreglo;
    }
}
