<?php

class clientesModel{
    var $result;

    public function listarClientes()
    {
        require_once('db/connectClass.php');
        $Oconn = new connectClass();
        $Oconn -> openConnect();
        $conn = $Oconn -> getConn();

        $sql = 'SELECT * FROM clients';
        
        $this -> result = $conn -> query($sql);
    }

    public function getConsulta()   
    {
        return $this -> result;
    }
}


?>