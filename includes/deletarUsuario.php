<?php
    session_start();
    include('../Controller/Usuario.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_usuario = $_GET['id'];

        $usuario = new Usuario();
        $deletar = $usuario->excluirUsuario($id_usuario);

        header('Location: ../index.php');
        exit();

    }else{
        $_SESSION['msg'] = "<p style='color: #f00;'>ID do usuário não fornecido.</p>";
        header('Location: ../index.php');
        exit();
    }
?>