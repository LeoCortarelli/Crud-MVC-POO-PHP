<?php
    require_once('./controller/clientesController.php'); // Requerindo do controler

    $controle = new ClientesController(); // instancianado a classe ClientesController

    $action = !empty($_GET['acao']) ? $_GET['acao'] : 'getAll'; // pegando a acão
    /*  !empty()  Indica se não for fazio o conteudo no parametro 'acao' quer dizer que ele existe ai 
    e Utilizado o ? depois, o (:) caso contrario,  (getAll) pega todos os registros
    !empty($_GET['acao']) se existir ele pega $_GET['acao'] senão 'getAll' ele pega todas */
    
    /* 11:52 */
?>