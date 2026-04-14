#!/usr/bin/env bash
# exit on error
set -o errexit

composer install --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
# ডাটাবেস মাইগ্রেশন অটোমেটিক করার জন্য নিচের লাইনটি
# php artisan migrate --force 

