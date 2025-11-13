<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        
        <nav class="main-nav">
            <a href="index.php?action=index">home</a>
            <a href="index.php?action=create" class="active">add</a>
            <a href="index.php?action=edit_list">edit</a>
            <a href="index.php?action=delete_list">delete</a>
        </nav>

        <div class="form-container">
            <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="nome">Nome do Jogo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="plataforma">Plataforma:</label>
                    <input type="text" id="plataforma" name="plataforma" value="Xbox 360" required>
                </div>

                <div class="form-group">
                    <label for="ano_lancamento">Ano de Lançamento:</label>
                    <input type="number" id="ano_lancamento" name="ano_lancamento" min="1970" max="2099">
                </div>

                <div class="form-group">
                    <label for="imagem_arquivo">Imagem do Jogo (Arquivo):</label>
                    <input type="file" id="imagem_arquivo" name="imagem_arquivo" accept="image/png, image/jpeg, image/webp">
                </div>
                
                <button type="submit" class="btn btn-green">Salvar Jogo</button>
            </form>
        </div>

    </div>
</body>
</html>