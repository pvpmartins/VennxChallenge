Primeiramente para rodar essa aplicação em Docker, rodar no diretorio do projeto:

```
docker-compose up -d
```
depois de alguns minutos, a aplicação estará disponivel em http://0.0.0.0/

para finalizar, rodar as migrations no diretorio da aplicação com 

```
./vendor/bin/sail artisan migrate
```

e fazer o seeding do banco de dados com:
```
./vendor/bin/sail artisan db:seed
```
