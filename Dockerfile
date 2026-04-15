FROM php:8.2-apache

# ১. প্রয়োজনীয় পিএইচপি এক্সটেনশন ইনস্টল
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    && docker-php-ext-install gd pdo pdo_mysql

# ২. কম্পোজার সরাসরি কপি করে আনা
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ৩. অ্যাপাচি সার্ভারকে লারাবেলের public ফোল্ডারে পাঠানো
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# ৪. প্রজেক্ট ফাইল কপি ও পারমিশন সেট করা
COPY . /var/www/html
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ৫. অ্যাপাচি rewrite অন করা এবং কম্পোজার রান করা
RUN a2enmod rewrite
RUN composer install --no-dev --optimize-autoloader

