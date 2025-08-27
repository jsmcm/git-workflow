FROM ghcr.io/woganmay/laravel-runtime-app:latest

WORKDIR /var/www/html

# Copy application code
COPY --chown=runtime . /var/www/html

CMD ["apache2-foreground"]
