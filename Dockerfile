#Ubuntu
FROM ubuntu

# Copia el archivo /etc/resolv.conf del host al contenedor
#COPY resolv.conf /etc/resolv.conf

#RUN sed -i 's/http:\/\/archive.ubuntu.com/http:\/\/old-releases.ubuntu.com/g' /etc/apt/sources.list

# Configurar los servidores de repositorios
#RUN echo "deb http://archive.ubuntu.com/ubuntu focal main universe" > /etc/apt/sources.list \
#   && echo "deb http://archive.ubuntu.com/ubuntu focal-security main universe" >> /etc/apt/sources.list \
#  && echo "deb http://archive.ubuntu.com/ubuntu focal-updates main universe" >> /etc/apt/sources.list
#Desactivarpreguntas reducirán esto presentando una lista de ciudades
ENV DEBIAN_FRONTEND=noninteractive 
# Actualiza los repositorios e instala los paquetes necesarios


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
EXPOSE 8000

# generar las migraciones 
#RUN php artisan migrate

# Inicia el servidor web de Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
