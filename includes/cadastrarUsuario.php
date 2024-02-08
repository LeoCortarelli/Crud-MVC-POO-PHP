<?php
session_start();
include('../Controller/Usuario.php');

if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['fone']) && !empty($_POST['dataNasc'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $dataNasc = $_POST['dataNasc'];

    $usuario = new Usuario();
    $cadastro = $usuario->cadastrarUsuario($nome, $email, $fone, $dataNasc);

    if($cadastro){
        header('Location: ../index.php');
    }else{
        // Se houve um erro no cadastro
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro ao cadastrar usuário. Por favor, tente novamente.</p>";
        // Redirecione o usuário de volta para o formulário de cadastro
        header('Location: ../index.php');
    }

   
}else{
    // Se algum dos campos estiver faltando, defina a mensagem de erro
    $_SESSION['msg'] = "<p style='color: #f00;'>Você precisa inserir todos os dados</p>";
    // Redirecione o usuário de volta para o formulário de cadastro
    header('Location: ../index.php');
    exit();
}
?>