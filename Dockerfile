FROM php:5-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysql \
    && docker-php-ext-enable mysql
