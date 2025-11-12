<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Jogos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .acoes a { margin-right: 10px; }
    </style>
</head>
<body>

    <h1>🎮 Meus Jogos</h1>

    <a href="index.php?action=create">Adicionar Novo Jogo</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Plataforma</th>
                <th>Ano de Lançamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            
            foreach ($jogos as $jogo): 
            ?>
                <tr>
                    <td><?= htmlspecialchars($jogo['nome']) ?></td>
                    <td><?= htmlspecialchars($jogo['plataforma']) ?></td>
                    <td><?= htmlspecialchars($jogo['ano_lancamento']) ?></td>
                    <td class="acoes">
                        <a href="index.php?action=edit&id=<?= $jogo['id'] ?>">Editar</a>
                        <a href="index.php?action=delete&id=<?= $jogo['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este jogo?');">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
            <?php if (empty($jogos)): ?>
                <tr>
                    <td colspan="4">Nenhum jogo cadastrado ainda.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>