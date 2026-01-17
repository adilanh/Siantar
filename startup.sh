#!/bin/bash

# Azure App Service startup script for Laravel (Optimized for low storage)

cd /home/site/wwwroot

# Install composer dependencies (production only - saves ~100MB)
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Set permissions
chmod -R 775 storage bootstrap/cache

# Create storage link
php artisan storage:link

# Clean up to save space
composer clear-cache
rm -rf storage/logs/*.log 2>/dev/null
