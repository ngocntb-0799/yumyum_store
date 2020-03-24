<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Wellcome YumYum Store

## Clone source code

```
$ git clone git@github.com:ngocntb-0799/yumyum_store.git
```

## Installation

Install PHP dependencies via Composer.

```bash
composer install
```

Generate .env file (if not exists) from .env.example

```bash
cp .env.example .env
```

Generate key

```bash
php artisan key:generate
```

Migrate database

```bash
php artisan migrate
```

Clear config

```bash
php artisan config:clear
```


## Run app in local

- Application: http://localhost:8000