FROM php:8.2-apache

# Install mysqli
RUN docker-php-ext-install mysqli

# Ensure only prefork MPM is enabled
RUN sed -i 's/^LoadModule mpm_event/#LoadModule mpm_event/' /etc/apache2/mods-available/mpm_event.load && \
    a2enmod mpm_prefork

COPY . /var/www/html/

EXPOSE 80
