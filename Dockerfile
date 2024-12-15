FROM php:8.3-apache

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# mengubah document_root dari /var/www/html menjadi /var/www/html/public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /var/www/html/
RUN chown www-data:www-data /var/www/html/ -R
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
EXPOSE 80

RUN composer install
