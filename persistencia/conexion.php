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
class conexion {
    //put your code here
    
    private $host = "localhost";
    private $usuario = "adsi";
    private $pass = "adsi750669";
    private $database = "materias";
    private $port = "3306";
    private $conex;




    public function __construct(){
        $this->conex = new mysqli($this->host, $this->usuario, $this->pass, $this->database, $this->port);
if ($this->conex->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $this->conex->connect_error;
}       
        
}
 
public function ejecutar($insentencia) {
    $resultado;
    $this->conex->query($insentencia);
    $resultado = $this->conex->affected_rows;
    return $resultado;
}

public function consultar($insentencia) {
    $resultado;    
    $valores = $this->conex->query($insentencia);
    $resultado = $valores->fetch_all(MYSQLI_NUM);
    return $resultado;
}

    
}
