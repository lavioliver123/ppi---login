<?php

class Database{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $database = "todo_list";
    private $conn = '';

    public function conectar(){
        $this->conn = new mysqli($this->host, $this->usuario, $this->senha, $this->database);
        if($this->conn->connect_error){
            die("Falha na conexão: " . $this->conn->connect_error);
        }

        return $this->conn;
    }

}





?>