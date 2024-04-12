# Teste Técnico - Mentes Notaveis

# Como rodar este projeto

## Instalação

Clonar repositorio

    git clone <repositorio>

Mudar para o diretorio do projeto

    cd <nome_projeto>

Instalar dependencias usando o Composer

    composer install

Copiar arquivos .env e realizar as configurações do banco de dados

    cp .env.example .env

Rodar o migrations pra criar as tabelas

    php artisan migrate

Rodar o seeders para popular as tabelas de estados e cidades

    php artisan migrate

## Testando a API

Iniciar o servidor local

    php artisan serve

## API

Lista com todos os endpoints da API

[Postman Collection](mentesNotaveis.postman_collection.json)

**Estados**

- GET - `/api/state` - Obter estados
- GET - `/api/state/{id}` - Obter estado pelo ID

**Cidades**

- GET - `/api/city` - Obter cidades
- GET - `/api/city/{id}` - Obter cidades pelo ID

**Endereços**

- GET - `/api/address` - Obter endereços
- GET - `/api/address` - Obter endereços pelo ID

**Usuario**

- GET - `/api/user` - Obter usuarios
- GET - `/api/user/{id}` - Obter usuarios pelo ID
- POST - `/api/user` - Criar usuario
- PUT - `/api/user/{id}` - Editar usuario
- DELETE - `/api/user/{id}` - Deleter usuario