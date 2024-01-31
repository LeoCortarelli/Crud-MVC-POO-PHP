<?php include('includes/Header.php'); ?>

    <div class="content">
        <?php include('Class/conexao.php'); ?>
        <?php include('Class/Crud.php'); ?>

       <div class="resultado"></div>

        <div class="formulario">
            <form name="FormCadastro" id="FormCadastro" action="Controller/ControleCadastro.php" method="post">
                <h1>Cadastro</h1><br><br>
                <input type="text" id="nome" name="nome" placeholder="Nome"><br>
                <input type="text" id="sexo" name="sexo" placeholder="Sexo"><br>
                <input type="text" id="cidade" name="cidade" placeholder="Cidade"><br>
                <br>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

<?php include('includes/Footer.php'); ?>