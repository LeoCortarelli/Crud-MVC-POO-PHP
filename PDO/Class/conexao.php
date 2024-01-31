<?php
    /* CONEXAO COM O BANCO DE DADOS */

    abstract class Conexao{  // Você ultiliza o abstract aqui por uma forma de segurança

        # Realizando a conexao com o banco de dados
        protected function conexaoBD(){
            try {
                $conn = new PDO("mysql:host=localhost;dbname=crud_mvc_poo_php","root","");
                return $conn;
            } catch (PDOException $erro) {
                return $erro->getMessage();
            }
        }

    }


?>