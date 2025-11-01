# Use a PHP CLI image (you might switch to php-fpm + nginx later if desired)
FROM php:8.2-cli

# Install necessary extensions for OctoberCMS
RUN apt-get update && apt-get install -y \
    unzip git libpng-dev libonig-dev libxml2-dev zip curl \
  && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
  && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy over custom PHP configuration
COPY ./php-custom.ini /usr/local/etc/php/conf.d/

# Copy application code
COPY . .

# (Optional) generate an artisan key if not set
RUN php artisan key:generate || true

# Run the built-in server when container starts
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
