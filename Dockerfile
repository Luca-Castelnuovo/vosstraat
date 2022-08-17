FROM composer as composer
COPY ./src /app
RUN composer install --ignore-platform-reqs --no-scripts

FROM php:8.1-apache
RUN a2enmod rewrite
WORKDIR /var/www/root
COPY --from=composer /app/vendor /var/www/root/vendor
