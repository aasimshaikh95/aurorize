# Use an official PHP image as the base
FROM php:8.2-fpm


EXPOSE 80
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=$PORT"]

# Set environment variables
ENV DEBIAN_FRONTEND=noninteractive \
    APP_ENV=production

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo_mysql bcmath opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache


# Configure Apache to force HTTPS
RUN echo "<VirtualHost *:80>\n\
RewriteEngine On\n\
RewriteCond %{HTTPS} off\n\
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]\n\
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf


# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Run database migrations
RUN php artisan migrate --force

# Run the database seeder (AdminTableSeeder)
RUN php artisan db:seed --class=AdminTableSeeder --force



# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
