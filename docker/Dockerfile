FROM php:8.1-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    software-properties-common \
    npm \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxslt-dev

# Install Node.js 18.x
RUN curl -fsSL https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add - \
    && echo "deb https://deb.nodesource.com/node_18.x focal main" > /etc/apt/sources.list.d/nodesource.list \
    && echo "deb-src https://deb.nodesource.com/node_18.x focal main" >> /etc/apt/sources.list.d/nodesource.list \
    && apt-get update \
    && apt-get install -y nodejs

RUN npm install npm@latest -g && \
    npm install n -g && \
    n latest

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
    -j$(nproc) gd \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    zip \
    soap \
    intl \
    dom \
    && docker-php-ext-enable soap

# Get latest Composer
COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

USER $user
