<?php

    class Connection {
    private $serv = 'localhost'; //servidor
    private $db = 'to_do_list'; //nome do banco
    private $user = 'root'; //usuário do banco
    private $pass = ''; //senha do banco

        public function connect(){

            try{
            $conn = new PDO(
            "mysql:host=$this->serv;dbname=$this->db",
            "$this->user",
            "$this->pass"
            );
            return $conn;
            } catch(PDOException $e){
            echo $e->getMessage();
            }
        }
    }

?>