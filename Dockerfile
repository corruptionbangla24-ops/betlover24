FROM php:8.2-apache

# ১. প্রয়োজনীয় টুলস ইনস্টল
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip git unzip \
    && docker-php-ext-install gd pdo pdo_mysql

# ২. কম্পোজার কপি করে আনা
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ৩. অ্যাপাচি কনফিগারেশন (Public ফোল্ডার সেট করা)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# ৪. সব ফাইল কপি ও পারমিশন সেট করা
COPY . /var/www/html
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ৫. বিল্ড প্রসেস
RUN a2enmod rewrite
RUN composer install --no-dev --optimize-autoloader
RUN php artisan config:cache

RUN composer install --no-dev --optimize-autoloader
RUN chmod -R 775 storage bootstrap/cache
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

