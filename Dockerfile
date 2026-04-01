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
    libldap2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu \
    && docker-php-ext-install -j$(nproc) \
    gd intl mbstring mysqli pdo_mysql xml zip curl imap opcache bcmath soap ldap \
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

# Create required directories for composer and application
RUN mkdir -p \
    /var/www/html/public/legacy/Api \
    /var/www/html/public/legacy/cache \
    /var/www/html/public/legacy/upload

# Install Composer and PHP dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    cd /var/www/html && \
    composer install --no-dev --optimize-autoloader --no-scripts

RUN mkdir -p \
    /var/www/html/cache \
    /var/www/html/logs \
    /var/www/html/upload \
    /var/www/html/public/legacy/cache \
    /var/www/html/public/legacy/upload \
    && chgrp -R 0 /var/www/html /var/log/apache2 /var/run/apache2 /etc/apache2 \
    && chmod -R g=u /var/www/html /var/log/apache2 /var/run/apache2 /etc/apache2

# Create .env file with basic configuration
RUN printf 'APP_ENV=production\nAPP_DEBUG=0\nAPP_SECRET=SuiteCRMSecretKey2026\nDATABASE_URL=mysql://farodevops:4dm1nf4ro159@mariadb:3306/suitecrm?serverVersion=11.0&charset=utf8mb4\nMAILER_DSN=null://null\nTZ=America/Mexico_City\n' > /var/www/html/.env && \
    chown www-data:www-data /var/www/html/.env && \
    chmod 644 /var/www/html/.env

EXPOSE 8080

ENTRYPOINT ["apache2-foreground"]
