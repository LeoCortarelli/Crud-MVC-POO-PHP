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
            <h2>Cadastrar Usuario</h2><br><br>
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
            <table border="2">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>FONE</th>
                    <th>NESCIMENTO</th>
                </tr>
                <?php 
                include("Controller/Usuario.php");
                include("Conexao/conexao.php");
                $this->conn->getConexao();
                $usuarios = new Usuario();
                $usuarios = $usuarios->listarUsuario();

                foreach($usuarios as $user){ ?>
                    <tr>
                        <td><?php echo $user['id_usuario'] ?></td>
                        <td><?php echo $user['nome'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['fone'] ?></td>
                        <td><?php echo $user['data_nascimento'] ?></td>
                        <td>
                            <a href="Includes/editarUsuario.php?={$user['id_usuario']}">Editar</a>
                            <a href="Includes/deletarUsuario.php?={$user['id_usuario']}">Deletar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>