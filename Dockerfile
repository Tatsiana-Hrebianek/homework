# Базовый образ с PHP 8.2 с Apache
FROM php:8.2-apache

# Устанавливаем необходимые расширения
RUN docker-php-ext-install pdo pdo_mysql

# Устанавливаем composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Копируем только проект Block4/MVC внутрь контейнера
COPY Block4/MVC /var/www/html

# Меняем DocumentRoot на public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

#Включаем модуль Apache mod_rewrite (если нужно)
RUN a2enmod rewrite

# Устанавливаем права
RUN chown -R www-data:www-data /var/www/html

# Рабочая директория
WORKDIR /var/www/html

# Открываем порт 80
EXPOSE 80
