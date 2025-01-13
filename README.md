## Cara Installasi Aplikasi Rentify
- cp .env.example .env
- composer install
- php artisan key:generate
- php artisan storage:link
- mkdir -p storage/framework/{sessions,views,cache}
- php artisan cache:clear
- php artisan config:clear
- php artisan migrate --seed
