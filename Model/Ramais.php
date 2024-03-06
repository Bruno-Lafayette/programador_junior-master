<?php

class Ramais {

    private $con;

    public function __construct() {
        $this->con = Connect::connectDataBase();
    }

    public function getAllRamais(){
        try {
            if ($this->testConnect()){
                echo "ERRO AO SE CONECTAR AO BANCO DE DADOS";
            }
            $sql = $this->con->query("SELECT R.username, R.name, R.port ,F.status 
                                    FROM ramais R
                                    JOIN filas F ON username = sip
                                    ORDER BY username");
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        } catch(PDOException $e){
            echo $e;
        }
    }

    private function testConnect()
    {
        if ($this->con->connect_error) {
            echo "Erro ao conectar ao banco de dados " . $this->con->connect_error;
            return true;
        }
        return false;
    }

}