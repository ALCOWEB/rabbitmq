FROM php:8.0-cli

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/api