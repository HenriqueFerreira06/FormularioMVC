<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; }
        div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #007bff; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .link-voltar { display: inline-block; margin-top: 15px; }
    </style>
</head>
<body>

    <h1>Editar Jogo</h1>

    <form action="index.php?action=update" method="POST">
    
        <input type="hidden" name="id" value="<?= $jogo['id'] ?>">
        
        <div>
            <label for="nome">Nome do Jogo:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($jogo['nome']) ?>" required>
        </div>
        <div>
            <label for="plataforma">Plataforma:</label>
            <input type="text" id="plataforma" name="plataforma" value="<?= htmlspecialchars($jogo['plataforma']) ?>" required>
        </div>
        <div>
            <label for="ano_lancamento">Ano de Lançamento:</label>
            <input type="number" id="ano_lancamento" name="ano_lancamento" min="1970" max="2099" value="<?= htmlspecialchars($jogo['ano_lancamento']) ?>">
        </div>
        
        <button type="submit">Atualizar Jogo</button>
    </form>

    <br>
    <a href="index.php" class="link-voltar">Voltar para a Lista</a>

</body>
</html>