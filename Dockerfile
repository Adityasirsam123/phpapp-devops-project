# Use official PHP Apache base image
FROM php:8.1-apache

# Copy project files to Apache web root
COPY . /var/www/html/

# Fix Apache ServerName warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set permissions (optional but good practice)
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Apache runs in the foreground by default in this base image, so no need to add CMD

~      
