Primeiramente para rodar essa aplicação em Docker, rodar no diretorio do projeto:

```
docker-compose up -d
```
depois de alguns minutos, a aplicação estará disponivel em http://0.0.0.0/

para finalizar, rodar as migrations no diretorio da aplicação com 

```
docker-compose exec laravel.test php artisan migrate
```

e fazer o seeding do banco de dados com:
```
docker-compose exec laravel.test php artisan db:seed
```
