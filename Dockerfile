# Use the official PHP image with Apache (PHP and Apache are pre-installed)
FROM php:8.2-apache

# Set working directory inside the container
WORKDIR /var/www/html

# Install only necessary PHP extensions and system libraries
RUN apt-get update && apt-get install -y \
    libzip-dev \
    git \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql mbstring curl \
    && a2enmod rewrite

# Copy the project files to the container
COPY . .

# Install Composer globally and install production dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Set proper permissions for the copied files
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose the port for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]

