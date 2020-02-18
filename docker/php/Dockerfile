FROM php:7.3-fpm

# Installing dependencies with
RUN apt-get update && apt-get install -y \
    build-essential \
    default-mysql-client \
    openssl \
    locales \
    zip \
    zlib1g-dev \
    libicu-dev \
    libzip-dev
# Installing extensions
RUN docker-php-ext-install \
    pdo_mysql \
    zip \
    opcache

# Setting locales
RUN echo fr_FR.UTF-8 UTF-8 > /etc/locale.gen && locale-gen

# Installing composer
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer

# Changing Workidir
WORKDIR /app


