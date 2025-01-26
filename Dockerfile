# Use the official PHP image with Apache
FROM php:8.2-apache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy the project files to the container
COPY . .

# Install necessary PHP extensions and system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-install zip mysqli pdo pdo_mysql mbstring curl && \
    a2enmod rewrite

# Install Composer and run composer install (production environment)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Set proper permissions for the copied files
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose the port for Apache (Railway assigns a dynamic port)
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]