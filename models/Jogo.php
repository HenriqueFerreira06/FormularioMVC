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

    public function listarHome() {
        $sql = "SELECT * FROM jogos ORDER BY nome LIMIT 6";
        $stmt = $this->pdo->query($sql);
        $jogos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $jogos;
    }

    public function criar($nome, $plataforma, $ano_lancamento, $imagem_url) {
        $sql = "INSERT INTO jogos (nome, plataforma, ano_lancamento, imagem_url) 
                VALUES (:nome, :plataforma, :ano, :imagem_url)";
        
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':plataforma', $plataforma);
        $stmt->bindValue(':ano', $ano_lancamento);
        $stmt->bindValue(':imagem_url', $imagem_url);
          
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

    public function atualizar($id, $nome, $plataforma, $ano_lancamento, $imagem_url) {
        $sql = "UPDATE jogos 
                SET nome = :nome, plataforma = :plataforma, ano_lancamento = :ano, imagem_url = :imagem_url
                WHERE id = :id";
        
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':plataforma', $plataforma);
        $stmt->bindValue(':ano', $ano_lancamento);
        $stmt->bindValue(':imagem_url', $imagem_url);
        $stmt->bindValue(':id', $id);
        
        return $stmt->execute();
    }
}