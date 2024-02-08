<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud php</title>
</head>
<body>
    <div>
        <div>
            <h2>Cadastrar Usuario</h2><br>
            <?php 
                session_start();
                // Imprimir a mensagem de erro com sucesso
                if(isset($_SESSION['msg'])){ // (isset)se existir a variavel
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']); // destruindo a msg
                    "<br>";
                }
            ?>
        <br>
            <form action="includes/cadastrarUsuario.php" method="post">
                <input type="text" name="nome" placeholder="Nome"><br>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="text" name="fone" placeholder="Telefone"><br>
                <input type="date" name="dataNasc" placeholder="Data Nascimento"><br>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        <br>
        <br>
        <div>
            <h2>Lista de Usuarios</h2>
            <br>
            <?php 
                include("./Conexao/conexaoMysql.php");
                $sql = "SELECT * FROM usuarios";
                $result = $conn->query($sql);
            ?>
            <table border="2">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>FONE</th>
                    <th>NESCIMENTO</th>
                </tr>
                <?php 
                foreach($result as $user){ ?>
                    <tr>
                        <td><?php echo $user['id_usuario']; ?></td>
                        <td><?php echo $user['nome'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['fone'] ?></td>
                        <td><?php echo $user['data_nascimento'] ?></td>
                        <td>
                            <a href="includes/EditarUsuario/editarUsuario.php?id=<?php echo $user['id_usuario']; ?>">Editar</a>
                            <a href="includes/deletarUsuario.php?id=<?php echo $user['id_usuario']; ?>">Deletar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>