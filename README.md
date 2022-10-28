
## Configurando ambiente de desenvolvimento

referencia >>> https://www.treinaweb.com.br/blog/configurando-o-ambiente-de-desenvolvimento-php-laravel-no-linux

## INSTALAÇÃO DO PHP 8.0 no Linux Mint

- sudo apt install software-properties-common
- sudo add-apt-repository ppa:ondrej/php
- sudo apt update
- sudo apt install php8.0
- sudo apt install php8.0-mbstring php8.0-xmlrpc php8.0-soap php8.0-gd php8.0-xml php8.0-cli php8.0-zip php8.0-bcmath php8.0-tokenizer
- sudo apt install php8.0-sqlite3
- sudo apt install php8.0-mysql   >> Modulo para o MySql >> Não estava funcionando o "php artisan migrate"

## INSTALAÇÃO DO COMPOSER

Composer é um gerenciador de pacotes para o PHP

https://getcomposer.org/download/

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

php -r "unlink('composer-setup.php');"		>> Remover o instalador

sudo chmod +x composer.phar   				>> Para dar permissão de leitura

sudo mv composer.phar /usr/bin/composer  	>> you want to put the composer.phar into a directory on your PATH, so you can 
simply call composer from any directory (Global install)

## CRIANDO O PROJETO EM LARAVEL

Abrir o terminal do VSCode

composer create-project laravel/laravel treinaweb       >> "treinaweb" é o nome do projeto (e da pasta)

Esta dando erro criar dessa forma !!!

composer create-project laravel/laravel teste02 --ignore-platform-req=ext-curl  >> Funcionou

Quando terminar, entrar na pasta do projeto, nesse caso "teste02"

php artisan serve 	>> Start de um sever para rodar a aplicação >> Entrar no endereço exibido no navegador



## COMANDOS

PHP -m >> Lista todos os modulos instalados no computador


## CRUD 

https://imasters.com.br/php/como-fazer-um-crud-no-laravel-do-zero-parte-1
- Atenção: Por padrão o Laravel utiliza o Agrupamento utf8_unicode_ci.
- O Laravel conta com uma poderosa ferramenta de linha de comando, o artisan, que facilita todo o nosso processo de desenvolvimento, desde criação de arquivos, testes unitários, execução de instruções e muitos outros recursos.
- Migrations (arquivos de instrução para criação de tabelas)
- Laravel facilita a integração entre a tabela e a Model (que nada mais é do que um “representante” de uma tabela existente dentro do framework) , com a Model conseguimos Criar, Visualizar, Editar e Deletar com muita facilidade.
- xxx.blade.php (resources/views) facilita e muito a administração de html, layouts e redirecionamentos também

---

- Criar o projeto 		>>>  composer create-project laravel/laravel crud_basico --ignore-platform-req=ext-curl
- Rodar as migrations 	>>>  php artisan migrate	
- Criar migration 		>>>  php artisan make:model Produto -m
- Criar controller		>>>  php artisan make:controller ProdutosController   (app\Http\Controllers)


## Rodando o projeto

- Run >> git clone 'link projer github'
- Run >> composer install --ignore-platform-req=ext-curl
- Run >> cp .env.example .env 
- Edit .env file with DB information
- Run >> php artisan key:generate
- Run >> php artisan migrate
- Run >> php artisan db:seed
- Run >> php artisan serve







