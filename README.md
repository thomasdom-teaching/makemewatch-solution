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
- [MySQL](https://dev.mysql.com/doc/refman/8.0/en/) version 8.0 or above

### Installation

- Clone this project
- Configure your environment variables correctly
- Install dependencies using `composer install`
- Configure your web server to forward PHP requests to `/public/index.php`
- Create the MySQL database
- Use `php artisan migrate:fresh` to create the database structure
- Finally, use `php artisan db:seed` to insert tv show data in database (note: there are 2000 shows, so it can take several seconds to execute).

You're ready! Go to [http://localhost](http://localhost) to use Make Me Watch web app!

## License

&copy; 2022 Thomas Domingues. All rights reserved.
