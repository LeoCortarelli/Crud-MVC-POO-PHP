<?php 
    session_start();
    include_once '../Conexao/conexao.php';
    include_once '../Controller/Usuario.php';

    $usuario = new Usuario();
    $id_usuario = $_GET['id'];

    $detalhesUsuario = $usuario->detalhesUsuario($_GET['id']);


    if(isset($_POST['atualizar'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $dataNasc = $_POST['dataNasc'];

        $editar = $usuario->editarUsuario($id, $nome, $email, $fone, $dataNasc);
        $_SESSION['msg'] = 'Usuario alterado com sucesso';
        header('Location: ../index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h2>Editar Usuario</h2>
    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $detalhesUsuario['id_usuario'] ?>"><br>
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $detalhesUsuario['nome']; ?>"><br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $detalhesUsuario['email']; ?>"><br>
        <input type="text" name="fone" placeholder="Fone" value="<?php echo $detalhesUsuario['fone']; ?>"><br>
        <input type="date" name="dataNasc" placeholder="dataNasc" value="<?php echo $detalhesUsuario['data_nascimento']; ?>"><br>
        <br>
        <button type="submit" name="atualizar">Atualizar</button>
    </form>
</body>
</html>