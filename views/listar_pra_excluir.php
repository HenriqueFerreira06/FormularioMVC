<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="dashboard-container">
        
        <nav class="main-nav">
            <a href="index.php?action=index">home</a>
            <a href="index.php?action=create">add</a>
            <a href="index.php?action=edit_list">edit</a>
            <a href="index.php?action=delete_list" class="active">delete</a>
        </nav>

        <h2 style="font-size: 2.2rem; font-weight: 400; color: #333; margin-bottom: 2rem;">Selecione um jogo para excluir</h2>

        <div class="tile-grid">

            <?php foreach ($jogos as $jogo): ?>
                <?php
                    $style = ($jogo['imagem_url'] && file_exists($jogo['imagem_url']))
                        ? "background-image: url('" . htmlspecialchars($jogo['imagem_url']) . "');"
                        : "background-color: var(--xbox-dark-green);";
                ?>
                <a href="index.php?action=delete&id=<?= $jogo['id'] ?>" class="tile tile-link" style="display: block; text-decoration: none;" onclick="return confirm('Tem certeza que deseja excluir este jogo?');">
                    <div class="tile-bg" style="<?= $style ?>"></div>
                    <div class="tile-content"><h3><?= htmlspecialchars($jogo['nome']) ?></h3></div>
                </a>
            <?php endforeach; ?>
            
            <?php if (empty($jogos)): ?>
                <div class="tile size-large" style="background-color: #555;">
                    <div class="tile-content-static">
                        <h3>Nenhum jogo para excluir.</h3>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>