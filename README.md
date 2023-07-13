# README - Projeto Finalizado

Este é um projeto que foi finalizado com base no teste solicitado, que envolveu habilidades em HTML, CSS, JavaScript e PHP. O objetivo do teste foi organizar a estrutura do projeto de forma dinâmica para reutilização em novas páginas.

## Etapas Concluídas

A seguir, estão detalhadas as etapas concluídas durante o desenvolvimento do projeto:

### Atividade 1 - Organização da Estrutura

- Criou-se os arquivos `cabeçalho.php`, `menu.php` e `rodapé.php`.
- Esses arquivos foram incluídos no arquivo `index.php`, que é a página principal.
- Dessa forma, o cabeçalho, menu e rodapé são comuns em várias páginas, facilitando a reutilização da estrutura.

### Atividade 2 - Menu Dinâmico

- O menu foi construído dinamicamente.
- Criou-se um array com as opções existentes no menu estático.
- Adicionaram-se três itens ao menu:
  - Cadastro > Produtos.
  - Cadastro > Perfil de acesso.
  - Relatório > Produtos.
- Os itens foram ordenados em ordem alfabética.

### Atividade 3 - Consulta de Dados

- As três caixas coloridas na página "Dashboards" (Clientes, Usuários e Fornecedores) foram populadas com dados consultados no arquivo `data_request.class.php`.

### Atividade 4 - Mudança de Cor com JavaScript

- Ao clicar no botão "Visualizar" de cada caixa na página "Dashboards", a tabela "Tabela Simples" muda de cor, adotando a cor da caixa clicada.
- Essa funcionalidade foi implementada utilizando apenas JavaScript.

### Atividade 5 - Consulta de Dados com AJAX

- Ao clicar no botão "Visualizar" de cada caixa na página "Dashboards", além de mudar a cor da tabela, os dados retornados das funções `dadosClientes`, `dadosFornecedores` e `dadosUsuarios` do arquivo `data_request.class.php` são apresentados na tabela.
- As consultas foram realizadas utilizando AJAX da biblioteca jQuery.
