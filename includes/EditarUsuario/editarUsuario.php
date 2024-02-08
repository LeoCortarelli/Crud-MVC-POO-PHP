<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <div>
        <a href="../../index.php">Sair</a>
        <h2>Editar Usuario</h2><br>
        <?php if(isset($msg)) echo $msg; ?>
        <br>
        <form action="config.php" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="text" name="fone" placeholder="Telefone"><br>
            <input type="date" name="dataNasc" placeholder="Data Nascimento"><br>
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>