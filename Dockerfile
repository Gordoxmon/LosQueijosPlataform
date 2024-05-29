FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y build-essential libpng-dev libjpeg62-turbo-dev libfreetype6-dev locales zip jpegoptim optipng pngquant gifsicle unzip git curl libonig-dev libzip-dev libicu-dev && \
    apt-get clean && rm -rf /var/lib/apt/lists/*


# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd intl bcmath

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory

WORKDIR /var/www

COPY . .


RUN composer update
RUN composer install

CMD ["php-fpm"]

EXPOSE 9000
