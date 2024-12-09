<?php
include_once "PessoaController.php";

$action = $_GET['action'] ?? null;
$pessoaController = new PessoaController();

switch ($action) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pessoaController->cadastrarPessoa($nome, $email, $senha);
        header("Location: index.php");
        break;

    case 'excluir':
        $id = $_GET['id'];
        $pessoaController->excluirPessoa($id);
        header("Location: index.php");
        break;

    case 'editar':
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'] ?? null;
        $pessoaController->editarPessoa($id, $nome, $email, $senha);
        header("Location: index.php");
        break;
}
?>
