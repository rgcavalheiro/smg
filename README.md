# Jogo Online - Plataforma de Jogos

## Descrição

Este projeto é uma plataforma de jogos online desenvolvida com Laravel. Ele permite que os usuários se registrem, façam login, depositem moedas virtuais e usem essas moedas para participar de jogos disponíveis na plataforma.

## Funcionalidades

- Registro e Login de Usuário
- Recuperação de Senha
- Depósito de Moedas Virtuais via PayPal
- Seleção e Participação em Jogos
- Painel do Usuário (Dashboard)
- Gerenciamento de Usuários (Admin)
- Histórico de Transações
- Sistema de Suporte ao Cliente
- Segurança e Conformidade com GDPR

## Tecnologias Utilizadas

- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)
- [PayPal](https://www.paypal.com/)
- [Bootstrap](https://getbootstrap.com/)

## Pré-requisitos

- PHP >= 8.0
- Composer
- MySQL
- Node.js & npm

## Instalação

1. Clone o repositório:

    ```bash
    git clone https://github.com/username/repo.git
    cd repo
    ```

2. Instale as dependências do PHP:

    ```bash
    composer install
    ```

3. Instale as dependências do Node.js:

    ```bash
    npm install
    npm run dev
    ```

4. Configure o arquivo `.env`:

    ```bash
    cp .env.example .env
    ```

    Atualize as variáveis de ambiente no arquivo `.env` para corresponder às suas configurações.

5. Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

6. Execute as migrações e seeders para configurar o banco de dados:

    ```bash
    php artisan migrate --seed
    ```

7. Inicie o servidor de desenvolvimento:

    ```bash
    php artisan serve
    ```

    O aplicativo estará disponível em `http://127.0.0.1:8000`.

## Uso

### Registro e Login

- Acesse `http://127.0.0.1:8000/register` para se registrar.
- Acesse `http://127.0.0.1:8000/login` para fazer login.

### Dashboard

- Após o login, você será redirecionado para o dashboard (`/dashboard`), onde poderá ver suas informações e acessar a seleção de jogos.

### Seleção de Jogos

- Acesse `http://127.0.0.1:8000/games` para ver a lista de jogos disponíveis e participar.

## Contribuição

1. Fork o repositório.
2. Crie uma nova branch: `git checkout -b minha-nova-funcionalidade`.
3. Faça suas alterações e commit: `git commit -m 'Adiciona nova funcionalidade'`.
4. Envie para o branch: `git push origin minha-nova-funcionalidade`.
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

## Contato

Para mais informações, entre em contato:

- Nome: [Seu Nome]
- Email: [seuemail@example.com]
- GitHub: [https://github.com/username]

