<?php

class Jogo {
    
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

   
    public function listar() {
        
        $sql = "SELECT * FROM jogos ORDER BY nome";
        $stmt = $this->pdo->query($sql);
        $jogos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $jogos;
    }

    public function criar($nome, $plataforma, $ano_lancamento) {
        
        $sql = "INSERT INTO jogos (nome, plataforma, ano_lancamento) 
                VALUES (:nome, :plataforma, :ano)";
        
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':plataforma', $plataforma);
        $stmt->bindValue(':ano', $ano_lancamento);
          
        return $stmt->execute();
    }
    
    public function deletar($id) {
        
        $sql = "DELETE FROM jogos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        
        return $stmt->execute();
        
    }

    public function buscarPorId($id) {
        
        $sql = "SELECT * FROM jogos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome, $plataforma, $ano_lancamento) {
        
        $sql = "UPDATE jogos 
                SET nome = :nome, plataforma = :plataforma, ano_lancamento = :ano 
                WHERE id = :id";
        
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':plataforma', $plataforma);
        $stmt->bindValue(':ano', $ano_lancamento);
        $stmt->bindValue(':id', $id);
        
        return $stmt->execute();
    }

}