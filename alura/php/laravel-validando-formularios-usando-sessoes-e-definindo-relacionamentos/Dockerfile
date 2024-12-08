FROM php:8.3-apache

# Install php extension
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Install Composer 
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip 

# Install xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
COPY config/php.ini /usr/local/etc/php/php.ini

RUN a2enmod rewrite

COPY src/ /var/www/html