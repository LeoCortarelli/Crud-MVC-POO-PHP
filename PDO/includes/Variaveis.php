<?php

if(isset($_POST['nome'])){
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nome'])){
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $nome = "";
}

if(isset($_POST['sexo'])){
    $sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['sexo'])){
    $sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $sexo = "";
}

if(isset($_POST['cidade'])){
    $cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['cidade'])){
    $cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $cidade = "";
}

?>