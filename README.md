# Modifiq - API
This project contains the ModifiQ API to do all the business rule for the project. It's an `Laravel` based project.

## Requisites to run the project
- Composer 2
- PHP 7.3
- Laravel 7
- MySQL

## How to run the project
- Make a copy from `.env.example` and rename to `.env`
- Configure all the settings on file: `.env`
- Run: `composer install`
- Run: `php artisan migrate`
- Run: `php artisan serve`
- Your application will be available in: `http://localhost:8000`

## How to generate updated documentation
- Run: `php artisan scribe:generate`

## How to access generated documentation
- Write in your browser: `http://localhost:8000/docs/`