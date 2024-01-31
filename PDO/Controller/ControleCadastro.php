<?php
include('../includes/Variaveis.php');
include('../Class/Crud.php');

$crud = new Crud();
$crud->insertBD("cadastro","?,?,?,?", array($nome,$sexo,$cidade));

echo "Cadastro realizado com sucesso!!";

// error 13:47

?>