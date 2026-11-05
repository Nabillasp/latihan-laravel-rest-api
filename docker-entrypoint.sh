#!/bin/bash
set -e

# Sesuaikan port Apache dengan PORT dinamis dari Render (default: 80 atau 10000)
PORT="${PORT:-80}"
sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${PORT}>/g" /etc/apache2/sites-available/000-default.conf

# Pastikan folder upload dan storage tersedia dengan hak akses yang benar
mkdir -p /var/www/html/storage/app/public/products
mkdir -p /var/www/html/storage/framework/cache/data
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/bootstrap/cache

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Pastikan symlink public/storage terpasang
php artisan storage:link --no-interaction || true

# Optimasi cache Laravel jika APP_KEY telah diset di environment Render
if [ -n "$APP_KEY" ]; then
    php artisan config:cache || true
    php artisan route:cache || true
    php artisan view:cache || true
fi

# Jalankan Apache Web Server
exec apache2-foreground
