# Sistema de Gerenciamento de Usuários em PHP com Bootstrap

Este é um simples sistema de gerenciamento de usuários em PHP com as operações CRUD (Create, Read, Update, Delete) implementadas. O sistema utiliza o framework Bootstrap para garantir uma interface amigável.

## Requisitos

- PHP (versão >= 5.6)
- MySQL (ou outro banco de dados compatível com o PHP)
- Bootstrap (versão 4.5.2)

## Instalação

1. Crie um banco de dados MySQL e configure as credenciais de acesso no arquivo `config.php`.
2. Importe o arquivo `database.sql` para criar a tabela `users`.
3. Coloque todos os arquivos em um servidor web compatível com PHP.
4. Acesse o sistema através do navegador.

## Funcionalidades

1. **Criar novo usuário:** Permite adicionar um novo usuário com os campos obrigatórios: nome, e-mail e senha.

2. **Visualizar lista de usuários:** Exibe uma lista com todos os usuários cadastrados.

3. **Editar usuário:** Permite editar os dados de um usuário existente.

4. **Excluir usuário:** Permite remover um usuário da lista.

## Segurança

- As senhas são armazenadas no banco de dados de forma criptografada utilizando a função `password_hash()` do PHP.
- O acesso ao banco de dados é feito através de consultas preparadas (prepared statements) para evitar ataques de injeção de SQL.

## Autor

Bruno D.

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.
