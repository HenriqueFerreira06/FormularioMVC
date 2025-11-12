<?php

require_once 'models/Jogo.php';

class JogoController {
    
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
       
        $jogoModel = new Jogo($this->pdo);
        $jogos = $jogoModel->listar();
        require_once 'views/listar_jogos.php';
    }

    public function create() {
        
        require_once 'views/criar_jogo.php';
    }

    public function store() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
           
            $nome = $_POST['nome'];
            $plataforma = $_POST['plataforma'];
            $ano_lancamento = $_POST['ano_lancamento'];

            $jogoModel = new Jogo($this->pdo);
            
            $jogoModel->criar($nome, $plataforma, $ano_lancamento);
            
            header('Location: index.php');
            exit;
        }
    }

    public function delete() {
        
        
            $id = $_GET['id'];
            
            $jogoModel = new Jogo($this->pdo);
            $jogoModel->deletar($id);
            
            header('Location: index.php');
            exit;
        }

    public function edit() {
        $id = $_GET['id'];
        $jogoModel = new Jogo($this->pdo);
        $jogo = $jogoModel->buscarPorId($id);
        require_once 'views/editar_jogo.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $plataforma = $_POST['plataforma'];
            $ano_lancamento = $_POST['ano_lancamento'];

            $jogoModel = new Jogo($this->pdo);
            $jogoModel->atualizar($id, $nome, $plataforma, $ano_lancamento);

            header('Location: index.php');
            exit;
        }

    }

}