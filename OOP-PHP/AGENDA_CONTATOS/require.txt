Projeto: Agenda de Contatos
Descrição:
Um sistema que permite gerenciar uma lista de contatos pessoais ou
profissionais, com recursos básicos de CRUD 
(Criar, Ler, Atualizar e Deletar).

Funcionalidades
Adicionar contatos:
O sistema deve permitir o cadastro de informações como nome, e-mail, t
elefone e endereço.

Listar contatos:
Exibir uma tabela ou lista com todos os contatos, mostrando as 
informações cadastradas.

Atualizar contatos:
Permitir que o usuário edite informações de um contato já cadastrado.

Excluir contatos:
Dar a opção de remover contatos específicos do banco de dados.

Pesquisar contatos (opcional):
Implementar uma barra de busca para filtrar contatos pelo 
nome ou outra informação.

Estrutura do Banco de Dados
Você precisaria criar uma tabela contacts com colunas como:

id (chave primária).
name (nome do contato).
email.
phone.
address.
created_at (data de criação).

Organização do Projeto
Arquitetura OOP:

Criar uma classe Contact para encapsular as operações 
relacionadas ao contato (inserir, atualizar, listar e deletar).
Utilizar controladores para gerenciar a lógica entre 
a interface e as operações no banco.
Front-end Simples:

Um formulário para adicionar ou editar contatos.
Uma tabela HTML para exibir a lista de contatos.
Rotas (Opcional):

Usar arquivos PHP separados para cada funcionalidade 
(adicionar, editar, listar, deletar) 
ou implementar algo mais dinâmico.
