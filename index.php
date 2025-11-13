<?php

require_once 'config/database.php';
require_once 'controllers/JogoController.php';

if (!isset($pdo)) {
    die("Falha ao carregar a conexão com o banco de dados.");
}

$controller = new JogoController($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'edit_list':
        $controller->listarParaEditar();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'delete_list':
        $controller->listarParaExcluir();
        break;
    case 'colecao':
        $controller->colecao();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}