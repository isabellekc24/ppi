<?php
    include_once("database.php");
    include_once("pessoaDAO.php");

    if(isset($_POST["nome"]) && isset($_POST["email"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        insere_usuarios($nome, $email);
    } else{
        echo "Erro ao inserir usuários, informe todos os dados";
    }
?>