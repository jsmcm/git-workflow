#!/bin/bash
# Container start script!
cd /var/www/html
php /var/www/html/artisan deploy

php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

if [ -n "$APP_KEY" ]; then
  php artisan config:cache
fi

exec "$@"
