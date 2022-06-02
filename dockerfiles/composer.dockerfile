FROM php:8.0-fpm-alpine

RUN apk add git
RUN mkdir -p /var/www/html

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
