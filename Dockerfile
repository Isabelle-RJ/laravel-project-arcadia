# Utilisez une image PHP officielle avec les extensions requises pour Laravel
FROM php:8.3-fpm

# Installez les dépendances système
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libssl-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Installer l'extension MongoDB via PECL
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Installez Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Configurez le dossier de l'application
WORKDIR /var/www/html

# Copiez les fichiers Laravel dans le conteneur
COPY . .

# Installez les dépendances de Laravel
RUN composer install --no-dev --optimize-autoloader

# Donnez les bonnes permissions au dossier storage et bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposez le port 9000 pour PHP-FPM et le port 80 pour Nginx
EXPOSE 9000 80

# Commande pour lancer PHP-FPM et Nginx ensemble
CMD ["php-fpm"]
