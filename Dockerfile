FROM php:7.4-fpm as base

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/123work/

# Set working directory
WORKDIR /var/www/123work

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    libzip-dev \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www/123work

# Copy existing application directory permissions
COPY --chown=www:www . /var/www/123work

# Change current user to www
USER www

# Change current user to root
USER root
RUN sed -i s/'user = www-data'/'user = www'/g /usr/local/etc/php-fpm.d/www.conf
RUN sed -i s/'group = www-data'/'group = www'/g /usr/local/etc/php-fpm.d/www.conf

# install nodejs npm
RUN apt-get update && apt-get upgrade -y
RUN curl -sL https://deb.nodesource.com/setup_6.x | bash -
RUN apt-get install -y nodejs
RUN apt-get install -y npm
RUN npm install npm@latest -g

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

