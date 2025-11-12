# 🎮 Gerenciador de Jogos (Projeto MVC)

Este projeto é um site de gerenciamento de jogos desenvolvido para a matéria de PWEB. O site utiliza PHP, o padrão de design MVC (Model-View-Controller) e uma conexão de banco de dados PDO (MySQL) para realizar todas as operações CRUD (Criar, Ler, Atualizar e Deletar).

---

## 👥 Integrantes da Equipe

* Henrique Ávila Ferreira
* João Pedro Campos Silva Nakazoni
* Cauê Pereira das Dores

---

## 🚀 Instruções para Execução

Para rodar este projeto localmente, siga os passos abaixo:

1.  **Servidor Local:** É necessário ter um servidor como o **XAMPP** instalado e rodando (com os módulos **Apache** e **MySQL** ativos).
2.  **Local dos Arquivos:** Clone ou baixe este repositório e coloque a pasta do projeto (ex: `projeto_jogos`) dentro do diretório `htdocs` do seu XAMPP (normalmente `C:\xampp\htdocs\`).
3.  **Banco de Dados:**
    * Abra o **phpMyAdmin** (acessível pelo painel do XAMPP).
    * Crie um novo banco de dados com o nome exato: `gerenciador_jogos`
4.  **Tabela:**
    * Dentro do banco `gerenciador_jogos`, clique na aba "SQL".
    * Copie e cole o código SQL abaixo e clique em "Executar".
5.  **Acessar:** Abra seu navegador e acesse `http://localhost/projeto_jogos/` (ou o nome que você deu à pasta do projeto).

---

## 🗄️ Código SQL (Schema do Banco)

Este é o código SQL necessário para criar a tabela `jogos` no banco de dados `gerenciador_jogos`.

```sql
CREATE TABLE `jogos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `plataforma` VARCHAR(100) NOT NULL,
  `ano_lancamento` INT,
  PRIMARY KEY (`id`)
);