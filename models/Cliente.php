<?php

    require_once('./config/conexao.php'); // Requerindo a conexao com o banco

    class ClientesModels extends Connect{  // Ela vai ser uma classe extenção da minha conexao com o banco
        private $table;

        function __construct(){
            parent::__construct(); // Dessa maneira conseguimos invocar o construtor da classe Connect
            $this->table = 'clientes';
        }
    }

?>