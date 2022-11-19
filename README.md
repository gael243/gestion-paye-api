<p style="{text-align: center}">
  <img src="https://www.kinshasadigital.com/img/images/logo_kinshasa_digital.png?w=100" alt="logo-kinshasa-digital">
</p>

## About
Compagny League - Système de gestion [Site officiel](https://app.beautifulsports.be/login)
## Installation

Use the package manager composer to install laravel.

```bash
    composer install
```

## Initialization

- Rename file .env.example to .env
- Update databse information

JWT token

```bash
    php artisan jwt:secret
```
Create env file

```bash
    cp .env.example .env
```

Migration

```bash
    php artisan migrate
```

Storage link

```bash
    php artisan storage:link
```


initialize seeds

```bash
    php artisan db:seed
```

start server

```bash
    php artisan serve
```
## Api Documentation

- e.g : [localhost:8000/docs](http://localhost:8000/docs)

## Contributing
- [Kinshasa Digital](https://www.kinshasadigital.com)
## License

[MIT license](https://opensource.org/licenses/MIT).
