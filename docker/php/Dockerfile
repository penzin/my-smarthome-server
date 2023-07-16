FROM php:8.2.1-fpm

# install modules
RUN apt-get update
RUN apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libicu-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        wget \
        git \
        unzip

RUN docker-php-ext-install pdo_mysql sockets
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-configure zip \
    && docker-php-ext-install intl mbstring exif gd pcntl soap bcmath zip

# configure
COPY php.ini /usr/local/etc/php/

# cleanup
RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/*

# install composer
RUN curl https://getcomposer.org/composer.phar > /usr/local/bin/composer && chmod a+x /usr/local/bin/composer

WORKDIR "/var/www/my-smarthome-server"
CMD ["php-fpm"]
