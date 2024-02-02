<?php
require_once __DIR__ . '/../Controller/Usuario.php';

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['fone']) && isset($_POST['dataNasc'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $dataNasc = $_POST['dataNasc'];

    $usuario = new Usuario();
    $cadastro = $usuario->cadastrarUsuario($nome, $email, $fone, $dataNasc);

}

?>