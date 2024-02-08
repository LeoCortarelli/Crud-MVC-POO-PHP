<?php

    require_once '../../Conexao/conexao.php';
    require_once '../../Controller/Usuario.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $usuario = new Usuario();
    $detalhesUsuarios = $usuario->detalhesUsuario($id);

    if($detalhesUsuarios){
        $nome = $detalhesUsuarios['nome'];
        $email = $detalhesUsuarios['email'];
        $fone = $detalhesUsuarios['fone'];
        $dataNasc = $detalhesUsuarios['data_nascimento'];
    }else{
        echo "Usuário não encontrado.";
        exit;
    }

}else{
    echo "ID do usuário não fornecido.";
    exit;
}



if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['fone']) && isset($_POST['dataNasc'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $dataNasc = $_POST['dataNasc'];
    if($usuario->editarUsuario($id, $nome, $email, $fone, $dataNasc)){
        $msg = "<p style='color: green;'> Usuario cadastrado com sucesso </p>";
    }else{
        $msg = "<p style='color: red;'> Erro ao atualizar usuario </p>";
    }
}else{
    $msg = "<p style='color: red;'> Todos os campos são obrigatorios </p>";
}


require_once 'editarUsuario.php';

?>