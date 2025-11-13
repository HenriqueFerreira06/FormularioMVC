<?php
require_once 'models/Jogo.php';

class JogoController {
    
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $jogoModel = new Jogo($this->pdo);
        $jogos = $jogoModel->listarHome();
        require_once 'views/listar_jogos.php';
    }

    public function colecao() {
        $jogoModel = new Jogo($this->pdo);
        $jogos = $jogoModel->listar();
        require_once 'views/colecao.php';
    }

    public function listarParaEditar() {
        $jogoModel = new Jogo($this->pdo);
        $jogos = $jogoModel->listar();
        // CORREÇÃO: Usando "listar_pra_editar.php" como o seu arquivo
        require_once 'views/listar_pra_editar.php';
    }

    public function listarParaExcluir() {
        $jogoModel = new Jogo($this->pdo);
        $jogos = $jogoModel->listar();
        // CORREÇÃO: Usando "listar_pra_excluir.php" como o seu arquivo
        require_once 'views/listar_pra_excluir.php';
    }

    private function handleFileUpload($fileInputName) {
        if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] == 0) {
            
            $target_dir = "uploads/";
            
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            $fileName = uniqid() . '-' . basename($_FILES[$fileInputName]["name"]);
            $target_file = $target_dir . $fileName;

            if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file)) {
                return $target_file;
            }
        }
        return null;
    }

    public function create() {
        require_once 'views/criar_jogo.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $plataforma = $_POST['plataforma'];
            $ano_lancamento = $_POST['ano_lancamento'];
            
            $imagem_url = $this->handleFileUpload('imagem_arquivo');

            $jogoModel = new Jogo($this->pdo);
            $jogoModel->criar($nome, $plataforma, $ano_lancamento, $imagem_url);
            
            header('Location: index.php');
            exit;
        }
    }

    public function delete() {
        $id = $_GET['id'];
        
        $jogoModel = new Jogo($this->pdo);
        $jogo = $jogoModel->buscarPorId($id);

        if ($jogo && $jogo['imagem_url'] && file_exists($jogo['imagem_url'])) {
            unlink($jogo['imagem_url']);
        }

        $jogoModel->deletar($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
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
            $imagem_url_atual = $_POST['imagem_url_atual'];

            $imagem_url = $imagem_url_atual;

            $new_image_path = $this->handleFileUpload('imagem_arquivo');
            
            if ($new_image_path) {
                $imagem_url = $new_image_path;
                
                if ($imagem_url_atual && file_exists($imagem_url_atual)) {
                    unlink($imagem_url_atual);
                }
            }

            $jogoModel = new Jogo($this->pdo);
            $jogoModel->atualizar($id, $nome, $plataforma, $ano_lancamento, $imagem_url);

            header('Location: index.php');
            exit;
        }
    }
}