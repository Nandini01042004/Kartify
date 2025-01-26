# Use the official PHP image with Apache (PHP and Apache are pre-installed)
FROM php:8.2-apache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy the project files to the container
COPY . .


# Set proper permissions for the copied files
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose the port for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]

