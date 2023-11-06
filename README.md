# Projeto de Adoção de Pets

Para testes usar:

composer install
npm install

Configurar o arquivo .env para seu banco de dados e porta.

Fazer as migrations: 

php artisan migrate

As seeds:
php artisan db:seed --class=SeederPets
php artisan db:seed --class=ImagensSeeder
php artisan db:seed --class=SolicitantesSeeder
php artisan db:seed --class=UserSeeder


Leve em conta que o ReCaptcha do Google, precisa de um domínio para funcionar.