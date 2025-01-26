# Use the official PHP image with Apache
FROM php:8.2-apache

# Install necessary PHP extensions for MySQL
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install mysqli pdo_mysql zip mbstring \
    && a2enmod rewrite

# Set working directory inside the container
WORKDIR /var/www/html

# Copy the project files into the container
COPY . .

# Set proper file permissions for Apache to access the files
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for Apache
EXPOSE 80

# Start Apache server in the foreground
CMD ["apache2-foreground"]
	


