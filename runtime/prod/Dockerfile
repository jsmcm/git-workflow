FROM ghcr.io/woganmay/laravel-runtime-app:latest

WORKDIR /var/www/html

# Copy application code
COPY --chown=runtime . /var/www/html

#ENTRYPOINT ["/var/www/html/start.sh"]

CMD ["apache2-foreground"]
