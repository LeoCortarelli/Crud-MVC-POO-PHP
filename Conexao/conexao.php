<?php
    class Conexao{  
        private $conn;

        # Realizando a conexao com o banco de dados
        public function __construct(){
            try {
                $this->conn = new mysqli("localhost","root","","crud_mvc_poo_php");
            } catch (Exception $erro) {
                return $erro->getMessage();
            }
        }

        public function getConexao() {
            return $this->conn;
        }

    }
?>