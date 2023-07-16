FROM php:7.4-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd


# Establece el directorio de trabajo
WORKDIR /var/www

# Copia los archivos del proyecto al contenedor
COPY . /var/www

# Copia el archivo .env al contenedor
COPY .env.example /var/www/.env

# Instala las dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece la versión específica de PHP
RUN composer config platform.php 7.4.16

# Instala las dependencias del proyecto
RUN composer install

# Genera la clave de la aplicación
RUN php artisan key:generate

# Establece los permisos adecuados
RUN chown -R www-data:www-data /var/www/storage

# Expone el puerto 8000
#EXPOSE 8000

# generar las migraciones 
#RUN php artisan migrate

# Inicia el servidor web de Laravel
#CMD php artisan serve --host=0.0.0.0 --port=8000
