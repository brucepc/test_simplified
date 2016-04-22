FROM php:5.6-fpm
RUN apt-get update && apt-get install -y \
        libssl-dev \
    && pecl install mongo \
    && docker-php-ext-enable mongo
WORKDIR /test_simplified