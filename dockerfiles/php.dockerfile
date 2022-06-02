FROM php:8.1.0-fpm-alpine

RUN mkdir -p /var/www/html


WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]
