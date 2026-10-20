FROM php:8.4-apache

# Instala extensões necessárias do PHP para conectar ao MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilita o módulo de reescrita do Apache (útil para URLs amigáveis)
RUN a2enmod rewrite
