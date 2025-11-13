<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        
        <nav class="main-nav">
            <a href="index.php?action=index">home</a>
            <a href="index.php?action=create">add</a>
            <a href="index.php?action=edit_list" class="active">edit</a>
            <a href="index.php?action=delete_list">delete</a>
        </nav>

        <div class="form-container">
            <h2>Editar: <?= htmlspecialchars($jogo['nome']) ?></h2><br>
            <form action="index.php?action=update" method="POST" enctype="multipart/form-data">
            
                <input type="hidden" name="id" value="<?= $jogo['id'] ?>">
                <input type="hidden" name="imagem_url_atual" value="<?= htmlspecialchars($jogo['imagem_url']) ?>">
                
                <div class="form-group">
                    <label for="nome">Nome do Jogo:</label>
                    <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($jogo['nome']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="plataforma">Plataforma:</label>
                    <input type="text" id="plataforma" name="plataforma" value="<?= htmlspecialchars($jogo['plataforma']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="ano_lancamento">Ano de Lançamento:</label>
                    <input type="number" id="ano_lancamento" name="ano_lancamento" min="1970" max="2099" value="<?= htmlspecialchars($jogo['ano_lancamento']) ?>">
                </div>

                <div class="form-group">
                    <label for="imagem_arquivo">Nova Imagem (Deixe em branco para manter a atual):</label>
                    <input type="file" id="imagem_arquivo" name="imagem_arquivo" accept="image/png, image/jpeg, image/webp">
                    <?php if ($jogo['imagem_url'] && file_exists($jogo['imagem_url'])): ?>
                        <p style="margin-top: 5px; color: #555;">Imagem atual: <img src="<?= htmlspecialchars($jogo['imagem_url']) ?>" alt="Preview" style="width: 50px; height: 50px; object-fit: cover; vertical-align: middle;"></p>
                    <?php endif; ?>
                </div>
                
                <button type="submit" class="btn btn-green">Atualizar Jogo</button>
            </form>
        </div>

    </div>
</body>
</html>