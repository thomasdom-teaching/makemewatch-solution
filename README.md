# Make Me Watch

## About

Make Me Watch is a web application that displays information about your favorite TV shows.

## Features

- List all TV shows in database.
- Get details about a show

## Setup

### Requirements

- A web server ([nginx](http://nginx.org/en/docs/) or [apache](https://httpd.apache.org/docs/2.4/) for example)
- [PHP](https://www.php.net/releases/8.1/en.php) 8.1 with the following extensions:
    - `bcmath`
    - `ctype`
    - `fileinfo`
    - `json`
    - `mbstring`
    - `openssl`
    - `pdo`
    - `tokenizer`
    - `xml`
- [Composer](https://getcomposer.org/) to manage dependencies

### Installation

- Clone this project
- Install dependencies using `composer install`
- Configure your web server to forward PHP requests to `/public/index.php`
- Install MySQL 8 and create the database
- Configure your environment variables correctly
- Use `php artisan migrate:fresh` to create the database structure
- Finally, use `php artisan db:seed` to insert tv show data in database

You're ready! Go to http://localhost to use Make Me Watch web app!

## License

&copy; 2022 Thomas Domingues. All rights reserved.
