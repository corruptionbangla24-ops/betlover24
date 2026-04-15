FROM php:8.2-apache

# ১. সিস্টেম টুলস এবং পিএইচপি এক্সটেনশন ইনস্টল
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

# ৩. প্রজেক্ট ফাইল কপি করা
COPY . /var/www/html
WORKDIR /var/www/html

# ৪. অ্যাপাচি কনফিগারেশন এবং পারমিশন সেট করা (এটিই ৫০০ এরর ঠিক করবে)
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ৫. কম্পোজার রান করা
RUN composer install --no-dev --optimize-autoloader

# ৬. পোর্ট এক্সপোজ করা
EXPOSE 80


