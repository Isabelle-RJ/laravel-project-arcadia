# ECF Arcadia (EN)
*Illusory application of a Zoo*

## Description of the project
 Welcome to the **Zoo Arcadia** app !

This project was developed as part of my *Développeur web et web mobile - Flutter* training carried out with STUDI, an online training organization.

The application is a full website witch allows :

- [x] visitor to discover animals of fictional zoo, habitats in which the animals are installed, the general condition of the latter, the services that Arcadia offers
as well as schedules and the possibility of leaving a review.
- [x]  And then, as a Zoo professional, to administer the content (create, read, update and delete information about the animals).

## Requirements :
- [PHP](https://www.php.net/downloads.php) 8.2 or higher installed.
- [Composer](https://getcomposer.org/download/) installed.
- Laravel 11 -> telescope
- MySQL
- MongoDB
- 

## Stack 

## Local installation :

Clone the repository
```shell
git clone https://github.com/Isabelle-RJ/arcadia-project.git
```
Go to the directory project
```shell
cd arcadia-project
```
Install all package composer.json:
```shell
composer install
```
Copy .env.example -> create `.env` -> paste content `.env.example` and change lines 22-26.

Start Laravel server in your IDE terminal :
```shell
php artisan key:generate

php artisan migrate

php artisan migrate:fresh --seed

php artisan storage:link
```

```shell
php artisan serve
```
For run vite :
```shell
npm install
npm run dev
```

Install telescope :
```shell
composer require laravel/telescope 
```
```shell
php artisan telescope:install
```

[Documentation Laravel](https://laravel.com/docs/11.x)

For sass :
```shell
npm install -D sass-embedded
```

### Accounts for testing :
```Admin : joseadmin@gmail.com -- 123456789aze```

```Veterinarian : josetteveterinarian@gmail.com -- 123456789aze```

```Employee : josephemployee@gmail.com -- 123456789aze```

### Author :

[Isabelle Radermecker Jurain](https://github.com/Isabelle-RJ/arcadia-project)
