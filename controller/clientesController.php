<?php
    require_once('./models/Cliente.php'); // Requerindo do Models

    class ClientesController{
        private $model;

        function __construct(){
            $this->model = new ClientesModels();
        }


    }


?>