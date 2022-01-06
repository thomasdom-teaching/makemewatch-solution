FROM php:8.1-fpm

ARG WWWUSER
ARG WWWGROUP

RUN docker-php-ext-install pdo_mysql

COPY --from=composer:2.2.3 /usr/bin/composer /usr/local/bin/composer

RUN groupadd -g $WWWGROUP -o www

RUN useradd -m -u $WWWUSER -g $WWWGROUP -o -s /bin/bash www

USER www

COPY . /var/www/html/

WORKDIR /var/www/html

RUN composer install
