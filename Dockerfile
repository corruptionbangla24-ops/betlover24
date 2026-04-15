FROM php:8.2-apache

# ১. কম্পোজার সরাসরি অফিশিয়াল ইমেজ থেকে কপি করে আনা
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ২. প্রয়োজনীয় সিস্টেম লাইব্রেরি এবং পিএইচপি এক্সটেনশন ইনস্টল
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    && docker-php-ext-install gd pdo pdo_mysql

# ৩. আপনার সব ফাইল সার্ভারে কপি করা
COPY . /var/www/html
WORKDIR /var/www/html

# ৪. লারাবেল পারমিশন ঠিক করা
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ৫. কম্পোজার দিয়ে প্রজেক্ট রেডি করা (এরর এড়াতে প্ল্যাটফর্ম রিকোয়ারমেন্ট ইগনোর করা হয়েছে)
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# ৬. অ্যাপাচি মোড রিরাইট অন করা
RUN a2enmod rewrite

