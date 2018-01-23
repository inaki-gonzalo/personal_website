FROM php:7.0-apache
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
#COPY config/php.ini /usr/local/etc/php/
COPY frontend/src/ /var/www/html/
COPY backend/src/ /var/www/html/
COPY private/ /var/www/private
