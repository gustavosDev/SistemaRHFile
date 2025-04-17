# SistemaRHFile
Não tive tempo de fazer o sistema de Login para entrar nas funcionalidades, porém o projeto tem todas as funcionalidades que foram pedidas, claro, exceto a de login
obs: o arquivo "gittributes" serviu apenas para enviar o projeto para o github (desnecessároio para o projeto)

Tutorial para fazer o projeto rodar

Requesitos
-Ter o xampp na máquina, ligar o apache e o mysql
-instalar o php 8.2 ou superior
-node.js 20 ou superior
-instalar o composer: https://getcomposer.org/Composer-Setup.exe (marcar a opção "adicionar ao PATH" na instalção)
---------------------------------------------------------------------
git clone https://github.com/gustavosDev/SistemaRHFile.git

1. crie uma pasta com o nome "SistemaRH" dentro do C:\xampp\htdocs
2.entre na pasta do projeto e coloque esses arquivos
3. abra o projeto dentro do vs code
4.abra o terminal do vsCode, com o composer instalado, rode: composer install (irá instalar todas as dependencias do laravel)
5. abra o ".env" e configure de acordo com o banco de dados local

APP_NAME=SistemaRH
APP_ENV=local
APP_KEY=base64:O617sy6lDv4m95A2XqtCocdj6k/8ffHHskPozbP5Nxw=
APP_DEBUG=true
APP_TIMEZONE=America/Ceara
APP_URL=http://127.0.0.1:8000/

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=SistemaRH
DB_USERNAME=root
DB_PASSWORD=

6.rodar as migrações do projeto (banco de dados) no terminal do vs code: 
php artisan migrate

7.No terminal do vs code, rode: 
php artisan serve

(esse comando irá dar o local para abrir o servidor na web, copiar e buscar no navegador; provavelmente: http://127.0.0.1:8000)

8. Instalar dependencias do front-end:
npm install bootstrap
npm install
npm run dev


9. caso queira acesso ao banco de dados:
    no navegador: http://localhost/phpmyadmin. o banco é o "sistemarh", tabela "users"
