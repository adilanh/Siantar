#!/bin/bash

# Azure Deployment Script for Laravel

echo "Starting deployment..."

# Install Composer dependencies
composer install --no-dev --prefer-dist --optimize-autoloader

# Install NPM dependencies and build assets
npm ci
npm run build

# Laravel optimizations for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

echo "Deployment completed!"
