<?php
include_once "PessoaController.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pessoaController = new PessoaController();
    if ($pessoaController->excluirPessoa($id)) {
        header("Location: index.php");
    } else {
        echo "Erro ao excluir usuário.";
        echo "<br><a href='index.php'>Voltar</a>";
    }
}
?>
