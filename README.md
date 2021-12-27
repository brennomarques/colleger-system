<p align="center"><img width="500" src="public/img/logo.png"></p>
<br><br>

# Sistema de faculdade

Sistema criado em Laravel 8, (Banco de dados não relacional)
<br></br>

### 🎲 Instalação local

```bash
# Clone este repositório
# Acesse a pasta do projeto no terminal/cmd

# Instale as dependências
$ composer install

# Criar um banco de dados MySql

# Copiar o .env.example para .env e realizar os ajustes de Banco de Dados com o banco criado anteriormente

# Execute o comando para gerar a Key
$ php artisan key:generate

# Rodar as migrations para criar as tabelas no banco de dados
$ php artisan migrate

# Execute a aplicação em modo de desenvolvimento
$ php artisan serve

# O servidor inciará na porta:8000 
- acesse <http://localhost:8000>
```

[Documentação migrate](https://laravel.com/docs/8.x/migrations)
