<?php
    require_once('./models/Cliente.php'); // Requerindo do Models

    class ClientesController{
        private $model;

        function __construct(){
            $this->model = new ClientesModels();
        }

        function getAll(){
            $resultData = $this->model->getAll(); // esse metodo tem que ser criado nas models
            require_once('./views/index.php');
        }

    }


?>