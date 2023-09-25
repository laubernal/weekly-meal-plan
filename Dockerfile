# Use an official PHP runtime as the base image
FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    wget \
    libicu-dev \
    libpq-dev \
    # Install PostgreSQL development files
    && docker-php-ext-install -j$(nproc) intl pdo pdo_pgsql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

RUN git config --global user.email "lbernalrodrguez@gmail.com" \ 
    && git config --global user.name "Laura Bernal"

COPY /server /var/www/symfony

# Set up a working directory
WORKDIR /var/www/symfony

# Expose port 9000
# EXPOSE 9000
