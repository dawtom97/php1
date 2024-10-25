# Wybierz bazowy obraz PHP
FROM php:8.0-apache

# Ustaw katalog roboczy
WORKDIR /var/www/html

# Skopiuj pliki aplikacji do kontenera
COPY . .

# Umożliwienie Apache'owi korzystania z plików PHP
RUN docker-php-ext-install pdo pdo_mysql

# Opcjonalnie, jeśli korzystasz z Composer, możesz zainstalować Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalacja zależności
RUN composer install

# Otwórz port 80
EXPOSE 80
