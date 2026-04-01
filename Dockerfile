FROM php:8.1-apache-bullseye

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    libicu-dev \
    libxml2-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    libc-client-dev \
    libkrb5-dev \
    zlib1g-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install -j$(nproc) \
    gd intl mbstring mysqli pdo_mysql xml zip curl imap opcache bcmath soap \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN { \
    echo 'memory_limit = 512M'; \
    echo 'upload_max_filesize = 100M'; \
    echo 'post_max_size = 100M'; \
    echo 'max_execution_time = 300'; \
    echo 'date.timezone = America/Mexico_City'; \
} > /usr/local/etc/php/conf.d/suitecrm.ini

RUN a2enmod rewrite headers expires && \
    sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf && \
    printf '<VirtualHost *:8080>\n    DocumentRoot /var/www/html/public\n    <Directory /var/www/html/public>\n        Options -Indexes +FollowSymLinks\n        AllowOverride All\n        Require all granted\n    </Directory>\n    ErrorLog /dev/stderr\n    CustomLog /dev/stdout combined\n</VirtualHost>\n' \
    > /etc/apache2/sites-enabled/000-default.conf

COPY --chown=www-data:www-data . /var/www/html/

# Install Composer and PHP dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    cd /var/www/html && \
    composer install --no-dev --optimize-autoloader 2>&1 | head -50

RUN mkdir -p \
    /var/www/html/cache \
    /var/www/html/logs \
    /var/www/html/upload \
    /var/www/html/public/legacy/cache \
    /var/www/html/public/legacy/upload \
    && chgrp -R 0 /var/www/html /var/log/apache2 /var/run/apache2 /etc/apache2 \
    && chmod -R g=u /var/www/html /var/log/apache2 /var/run/apache2 /etc/apache2

EXPOSE 8080

ENTRYPOINT ["apache2-foreground"]
