<?php
class Pessoa {
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct($nome = null, $email = null, $senha = null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function setAll($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
}
?>
