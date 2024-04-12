<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Teste Técnico - Mentes Notaveis

# Como rodar este projeto

## Instalação

Clonar repositorio

    git clone https://github.com/Lazax/mentes_notaveis_backend.git

Mudar para o diretorio do projeto

    cd mentes_notaveis_backend

Instalar dependencias usando o Composer

    composer install

Copiar arquivos .env e realizar as configurações do banco de dados

    cp .env.example .env

Gerar o application key

    php artisan key:generate

Rodar o migrations pra criar as tabelas

    php artisan migrate

Rodar o seeders para popular as tabelas de estados e cidades

    php artisan db:seed

## Testando a API

Iniciar o servidor local

    php artisan serve

# API

Lista com todos os endpoints da API

[Postman Collection com exemplos de cada endpoint](mentesNotaveis.postman_collection.json)

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