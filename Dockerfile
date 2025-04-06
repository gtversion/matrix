# Используем официальный образ PHP с поддержкой Apache
FROM php:8.1-apache

# Копируем файл index.php в директорию с сайтом внутри контейнера
COPY index.php /var/www/html/

# Устанавливаем необходимые расширения PHP, если нужно
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Открываем в контейнере порт 80 для веб-сервера
EXPOSE 80