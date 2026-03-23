# Laboratório: Sistema de Gestão de Publicações (PubMan)
### Disciplina: INF01099 - Desenvolvimento de Aplicações Web | INF-UFRGS

Este projeto faz parte de uma atividade prática para o aprendizado de arquitetura Web Client-Server, utilizando **HTML5**, **jQuery (JavaScript)** e **PHP**.

---

## 🚀 Como Iniciar o Ambiente (GitHub Codespaces)

Não é necessário instalar nada em sua máquina local. Siga os passos abaixo:

1. Clique no botão verde **"<> Code"** no topo deste repositório.
2. Selecione a aba **"Codespaces"** e clique em **"Create codespace on main"**.
3. Aguarde o carregamento do container (isso pode levar de 1 a 2 minutos).
4. No terminal que abrirá na parte inferior, digite o comando para iniciar o servidor:
   ```bash
   php -S 0.0.0.0:8080
   ```
5. Quando aparecer a notificação no canto inferior direito, clique em **"Open in Browser"**.

---

## 🎯 Requisitos do Exercício

O desafio consiste em implementar as operações de criação, listagem e exclusão (CRUD) para referências bibliográficas (modelo simplificado).

### 1. Validação com jQuery (Client-Side)
No arquivo `index.html`, implemente validações para impedir o envio se:
* **Ano:** O valor não possuir 4 dígitos ou for maior que o ano atual (ou não for um número).
* **Autores:** Deve aceitar nomes completos ou listas separadas por ponto-e-vírgula (`;`). Use Regex para validar se cada autor tem pelo menos duas palavras (Nome e Sobrenome).

### 2. Interface Dinâmica
* Implemente uma lógica onde, ao selecionar o tipo **"Site"** no combobox, o campo de **URL** apareça na tela.
* O campo URL deve ser obrigatório apenas para o tipo "Site".

### 3. Persistência com PHP (Server-Side)
* **Salvar:** O arquivo `salvar.php` deve receber os dados via POST e armazená-los no `dados.json`. Utilize chaves idênticas às do SQL (ex: `Ref_title`, `Ref_year`).
* **Excluir:** O arquivo `excluir.php` deve processar a remoção de um item através do parâmetro `ID` recebido via GET.

---

## 📂 Estrutura do Projeto

* `index.html`: Interface principal e lógica de validação.
* `listar.php`: Tabela de visualização dos registros.
* `salvar.php`: Processamento de inserção de dados.
* `excluir.php`: Lógica de remoção de registros.
* `dados.json`: Arquivo de armazenamento (nosso "banco de dados").

---

## 📤 Instruções de Entrega

1. Após concluir as tarefas, utilize o painel de "Source Control" no VS Code (ou o terminal) para realizar o **Commit**.
2. Faça o **Push** das alterações para o GitHub.
3. Verifique se os arquivos foram atualizados no repositório da sua tarefa no GitHub Classroom.

**Docente responsável:** Prof. Leandro Wives (UFRGS)
