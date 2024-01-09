# Projeto de Adoção de Pets

Para testes usar:

composer install
npm install

Configurar o arquivo .env para seu banco de dados e porta.

Fazer as migrations: 

php artisan migrate

As seeds:
php artisan db:seed --class=SeederPets <br>

php artisan db:seed --class=ImagensSeeder <br>

php artisan db:seed --class=SolicitantesSeeder <br>

php artisan db:seed --class=UserSeeder <br>


Leve em conta que o ReCaptcha do Google, precisa de um domínio para funcionar.

Usuário padrão de admin:

Email: misasoousa@gmail.com
Senha: 12345678