<?php
include_once("database.php");
include_once("Pessoa.php");

class PessoaDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = conectDb();
    }

    public function insert(Pessoa $pessoa) {
        try {
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":nome", $pessoa->nome);
            $stmt->bindValue(":email", $pessoa->email);
            $hashedPassword = md5($pessoa->senha);
            $stmt->bindValue(":senha", $hashedPassword);
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Erro ao inserir usuário: " . $e->getMessage());
        }
    }
    

    public function selectAll() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }

    public function selectById($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($pessoa) {
        $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $pessoa->nome);
        $stmt->bindParam(':email', $pessoa->email);
        $stmt->bindParam(':senha', $pessoa->senha);
        $stmt->bindParam(':id', $pessoa->id);
        return $stmt->execute();
    }
    
}
?>
