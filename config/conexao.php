<?php
    /* CONEXAO COM O BANCO DE DADOS */

    define('HOST','localhost');
    define('DBNAME', 'crud_mvc_poo_php');
    define('USER','root');
    define('PASS', '');

    class Connect{
        protected $conn;

        function __construct(){
            $this->connectDatabase();    
        }


        function connectDatabase(){
            try{
                $this->conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
            } catch(PDOException $e){
                echo "Erro na conexao com o banco de dados".$e->getMessage();
                die();
            }
        }
    }



?>