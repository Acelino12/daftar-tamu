1. rename .enc.example menjadi ".env"
   
2. ubah isi .env pafa bagian database sesuai yang anda mau
    mysql :
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=buku_tamu
    DB_USERNAME=root
    DB_PASSWORD=

    postgres :
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=buku_tamu
    DB_USERNAME=root
    DB_PASSWORD=

3. jalankan perintah generate key di terminal
    php artisan key:generate
   
4. jalankan migrasi database dengan ketik di terminal 
    "php artisan migrate"

5. jalankan program dengan ketik di terminal
    "php artisan serve"
