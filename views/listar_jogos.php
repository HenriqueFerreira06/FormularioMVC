<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='0.9em' font-size='90'%3E🎮%3C/text%3E%3C/svg%3E">
</head>
<body>

    <div class="dashboard-container">
        
        <nav class="main-nav">
            <a href="index.php?action=index" class="active">home</a>
            <a href="index.php?action=create">add</a>
            <a href="index.php?action=edit_list">edit</a>
            <a href="index.php?action=delete_list">delete</a>
        </nav>

        <?php
            $game_slots = $jogos;
            $slot_1 = array_shift($game_slots); 
            $slot_2 = array_shift($game_slots);
            $slot_3 = array_shift($game_slots);
            $slot_4 = array_shift($game_slots);
            $slot_5 = array_shift($game_slots);
            $slot_6 = array_shift($game_slots);
        ?>

        <div class="home-grid">

            <?php if ($slot_1): ?>
                <div class="tile tile-big-game">
                    <?php $style = ($slot_1['imagem_url'] && file_exists($slot_1['imagem_url'])) ? "background-image: url('" . htmlspecialchars($slot_1['imagem_url']) . "');" : ""; ?>
                    <div class="tile-bg" style="<?= $style ?>"></div>
                    <div class="tile-content"><h3><?= htmlspecialchars($slot_1['nome']) ?></h3></div>
                    <div class="tile-overlay">
                        <a href="index.php?action=edit&id=<?= $slot_1['id'] ?>" class="btn">Editar</a>
                        <a href="index.php?action=delete&id=<?= $slot_1['id'] ?>" class="btn" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="tile tile-big-game" style="background-color: #555;">
                    <div class="tile-content-static">
                        <h3 style="font-size: 1.5rem;">Nenhum jogo por aqui.</h3>
                        <p style="font-size: 1.2rem; color: #ccc;">Que tal adicionar um?</p>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if ($slot_2): ?>
                <div class="tile tile-game-1">
                    <?php $style = ($slot_2['imagem_url'] && file_exists($slot_2['imagem_url'])) ? "background-image: url('" . htmlspecialchars($slot_2['imagem_url']) . "');" : ""; ?>
                    <div class="tile-bg" style="<?= $style ?>"></div>
                    <div class="tile-content"><h3><?= htmlspecialchars($slot_2['nome']) ?></h3></div>
                    <div class="tile-overlay">
                        <a href="index.php?action=edit&id=<?= $slot_2['id'] ?>" class="btn">Editar</a>
                        <a href="index.php?action=delete&id=<?= $slot_2['id'] ?>" class="btn" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($slot_3): ?>
                <div class="tile tile-game-2">
                    <?php $style = ($slot_3['imagem_url'] && file_exists($slot_3['imagem_url'])) ? "background-image: url('" . htmlspecialchars($slot_3['imagem_url']) . "');" : ""; ?>
                    <div class="tile-bg" style="<?= $style ?>"></div>
                    <div class="tile-content"><h3><?= htmlspecialchars($slot_3['nome']) ?></h3></div>
                    <div class="tile-overlay">
                        <a href="index.php?action=edit&id=<?= $slot_3['id'] ?>" class="btn">Editar</a>
                        <a href="index.php?action=delete&id=<?= $slot_3['id'] ?>" class="btn" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($slot_4): ?>
                <div class="tile tile-game-3">
                    <?php $style = ($slot_4['imagem_url'] && file_exists($slot_4['imagem_url'])) ? "background-image: url('" . htmlspecialchars($slot_4['imagem_url']) . "');" : ""; ?>
                    <div class="tile-bg" style="<?= $style ?>"></div>
                    <div class="tile-content"><h3><?= htmlspecialchars($slot_4['nome']) ?></h3></div>
                    <div class="tile-overlay">
                        <a href="index.php?action=edit&id=<?= $slot_4['id'] ?>" class="btn">Editar</a>
                        <a href="index.php?action=delete&id=<?= $slot_4['id'] ?>" class="btn" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($slot_5): ?>
                <div class="tile tile-game-4">
                    <?php $style = ($slot_5['imagem_url'] && file_exists($slot_5['imagem_url'])) ? "background-image: url('" . htmlspecialchars($slot_5['imagem_url']) . "');" : ""; ?>
                    <div class="tile-bg" style="<?= $style ?>"></div>
                    <div class="tile-content"><h3><?= htmlspecialchars($slot_5['nome']) ?></h3></div>
                    <div class="tile-overlay">
                        <a href="index.php?action=edit&id=<?= $slot_5['id'] ?>" class="btn">Editar</a>
                        <a href="index.php?action=delete&id=<?= $slot_5['id'] ?>" class="btn" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if ($slot_6): ?>
                <div class="tile tile-game-5">
                    <?php $style = ($slot_6['imagem_url'] && file_exists($slot_6['imagem_url'])) ? "background-image: url('" . htmlspecialchars($slot_6['imagem_url']) . "');" : ""; ?>
                    <div class="tile-bg" style="<?= $style ?>"></div>
                    <div class="tile-content"><h3><?= htmlspecialchars($slot_6['nome']) ?></h3></div>
                    <div class="tile-overlay">
                        <a href="index.php?action=edit&id=<?= $slot_6['id'] ?>" class="btn">Editar</a>
                        <a href="index.php?action=delete&id=<?= $slot_6['id'] ?>" class="btn" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </div>
                </div>
            <?php endif; ?>

            <a href="index.php?action=create" class="tile-link tile-add">
                <div class="tile">
                    <div class="tile-content-static">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                        <h3>Adicionar Jogo</h3>
                    </div>
                </div>
            </a>

            <a href="index.php?action=colecao" class="tile-link tile-colecao">
                <div class="tile"> 
                    <div class="tile-content-static">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18H6V4h12v16zM8 6h8v2H8V6zm8 10H8v-2h8v2zm-8-4h8v-2H8v2z" fill="white"/></svg>
                        <h3>Coleção</h3>
                    </div>
                </div>
            </a>

            <div class="tile tile-base64">
                <img src="assets/etec.png" alt="Gamerpic Etec Taboão da Serra" style="width: 100%; height: 100%; object-fit: cover;">
            </div>

        </div>
    </div>

    <?php if (count($jogos) >= 6): ?>
        <div class="achievement-popup" id="ach-popup">
            <div class="icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,16.5L6.5,12L7.91,10.59L11,13.67L16.09,8.59L17.5,10L11,16.5Z" />
                </svg>
            </div>
            <div class="text">
                <h4>Conquista Desbloqueada!</h4>
                <p>10G - Home cheia. Veja em "Coleção"</p>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const popup = document.getElementById('ach-popup');
                if (popup) {
                    setTimeout(() => {
                        popup.classList.add('show');
                    }, 500); 

                    setTimeout(() => {
                        popup.classList.remove('show');
                    }, 5500);
                }
            });
        </script>
    <?php endif; ?>

</body>
</html>