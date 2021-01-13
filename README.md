# Sobre 

Packtrack é uma ferramenta p/ realizar o controle de encomendas e notificação do morador (via sms) sobre o recebimento da sua encomenda.

*Obs:o envio do sms é realizado através da plataforma smsdev.com.br, crie uma conta com algumas mensagens gratis p/ testar :)*

# Instruções

1. Configure as credenciais do seu banco de dados no arquivo .env
2. Realize o migration para criação das tabelas 
```sh
    $ php artisan migrate 
```
3. Realize o seeder p/ criar valores de exemplo nas tabelas

```sh
    $ php artisan db:seed
```
4.  Partindo do principio que você tem o ambiente laravel configurado na sua maquina, execute aplicação usando o comando abaixo:
```sh
    $ php artisan server
```


