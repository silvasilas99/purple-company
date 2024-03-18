# Purple Company Manager

    Visão Geral do Projeto:
    
      API básica dedicada a realizar práticas de operações básicas utilizando o framework 
      Laravel na versão 11 através de um CRUD com relacionamentos simples, envolvendo unidades, empregados e cargos.
    
## Instruções de Utilização: 
      Clone o repositório do projeto
        git clone https://github.com/silvasilas99/purple-company

      Vá ao diretório onde o projeto se encontra
          cd ./purple-company

      Crie um arquivo database.sqlite, o qual será utilizado como DB da aplicação
          touch ./database/database.sqlite

      Utilize o Composer para instalar os pacotes necessários para a aplicação rodar
          composer install

      Crie um arquivo .env com base no .env.example
          cp ./.env.example .env

      Crie a nova chave para rodar a aplicação localmente
          php artisan key:generate 

      Crie as migrations no DB
          php artisan migrate

      Realize o seeding no DB
          php artisan db:seed

      Utilize o comando de teste para executar as funções criadas
          php artisan serve
      
      Realize as requisições desejadas utilizando o arquivo PurpleCompanyManager.postman_collection.json, contido na raiz do repositório
          E obrigado por testar!!!
    
    ## Estrutura do Projeto:
    .
    ├── README.md
    ├── app
    │   ├── Http
    │   │   └── Controllers
    │   │       ├── Controller.php
    │   │       ├── EmployeeController.php
    │   │       ├── RoleController.php
    │   │       └── UnitController.php
    │   ├── Models
    │   │   ├── Employee.php
    │   │   ├── EmployeesRole.php
    │   │   ├── Role.php
    │   │   ├── Unit.php
    │   │   └── User.php
    │   └── Providers
    │       └── AppServiceProvider.php
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   ├── cache
    │   │   ├── packages.php
    │   │   └── services.php
    │   └── providers.php
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── cache.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── sanctum.php
    │   ├── services.php
    │   └── session.php
    ├── database
    │   ├── database.sqlite
    │   ├── factories
    │   │   ├── EmployeeFactory.php
    │   │   ├── EmployeesRoleFactory.php
    │   │   ├── RoleFactory.php
    │   │   ├── UnitFactory.php
    │   │   └── UserFactory.php
    │   ├── migrations
    │   │   ├── 0001_01_01_000000_create_users_table.php
    │   │   ├── 0001_01_01_000001_create_cache_table.php
    │   │   ├── 0001_01_01_000002_create_jobs_table.php
    │   │   ├── 2024_03_18_002125_create_units_table.php
    │   │   ├── 2024_03_18_002216_create_employees_table.php
    │   │   ├── 2024_03_18_002308_create_roles_table.php
    │   │   ├── 2024_03_18_002857_create_employees_role_table.php
    │   │   └── 2024_03_18_035858_create_personal_access_tokens_table.php
    │   └── seeders
    │       └── DatabaseSeeder.php
    ├── package.json
    ├── phpunit.xml
    ├── public
    │   ├── favicon.ico
    │   ├── index.php
    │   └── robots.txt
    ├── resources
    │   ├── css
    │   │   └── app.css
    │   ├── js
    │   │   ├── app.js
    │   │   └── bootstrap.js
    │   └── views
    │       └── welcome.blade.php
    ├── routes
    │   ├── api.php
    │   ├── console.php
    │   └── web.php
    ├── storage
    │   ├── app
    │   │   └── public
    │   ├── framework
    │   │   ├── cache
    │   │   │   └── data
    │   │   ├── sessions
    │   │   ├── testing
    │   │   └── views
    │   └── logs
    │       └── laravel.log
    ├── tests
    │   ├── Feature
    │   │   └── ExampleTest.php
    │   ├── TestCase.php
    │   └── Unit
    │       └── ExampleTest.php
    └── vite.config.js

