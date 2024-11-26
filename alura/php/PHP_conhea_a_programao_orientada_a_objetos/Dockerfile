FROM php:8.3-apache

# Install php extension
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Install xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
COPY config/php.ini /usr/local/etc/php/php.ini

COPY src/ /var/www/html