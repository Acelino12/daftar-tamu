1. buat database mysql 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=buku_tamu
    DB_USERNAME=root
    DB_PASSWORD=

    postgres    
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=buku_tamu
    DB_USERNAME=root
    DB_PASSWORD=

2. jalankan migrasi database dengan ketik di terminal 
    "php artisan migrate"

3. jalankan program dengan ketik di terminal
    "php artisan serve"