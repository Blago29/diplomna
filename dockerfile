# Използвай базов образ с PHP и Apache
FROM php:7.4-apache

# Копирай локалния код в контейнера
COPY . /var/www/html/

# Инсталирай зависимости, ако са необходими
# Пример: RUN composer install

# Конфигурирай Apache, ако е необходимо
# Пример: COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Отвори нужните портове
# Пример: EXPOSE 80

# Добави други настройки, ако са необходими

# Стартирай Apache при стартиране на контейнера
CMD ["apache2-foreground"]
