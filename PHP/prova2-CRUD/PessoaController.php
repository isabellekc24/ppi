<?php
include_once "PessoaDAO.php";

class PessoaController {
    private $dao;

    public function __construct() {
        $this->dao = new PessoaDAO();
    }

    public function cadastrarPessoa($nome, $email, $senha) {
        $pessoa = new Pessoa();
        $pessoa->setAll($nome, $email, $senha);
        return $this->dao->insert($pessoa);
    }

    public function listarPessoa() {
        return $this->dao->selectAll();
    }

    public function excluirPessoa($id) {
        return $this->dao->delete($id);
    }

    public function editarPessoa($id, $nome, $email, $senha) {
        $pessoa = new Pessoa();
        $pessoa->id = $id;
        $pessoa->setAll($nome, $email, $senha); // Remove o uso de password_hash
        return $this->dao->update($pessoa);
    }
    
    

    public function buscarPessoaPorId($id) {
    return $this->dao->selectById($id);
    }
    
}
?>
