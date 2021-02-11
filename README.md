# Pharmacy Codeigniter

## Kebutuhan

1. MySQL 15.1 Distrib 10.4.14-MariaDB
2. PHP 7.3
3. Composer
4. Git

## Cara install

1. Download atau clone repository ini ke folder `htdocs` atau yang lainnya.
2. Salin file `development.env` menjadi `.env`.
3. Buat database mysql dengan nama `pharmacy_codeigniter_development`.
4. Jika username dan password database bukan `root` dan ` `, sesuaikan config di `app/config/Database.php`.

## Cara menjalankan

1. Buat semua tabel dengan cara migrasi. Ketikkan perintah `php spark migrate`.
2. Buat isi semua tabel dengan cara *seeder*. Ketikkan perintah `php spark db:seed DatabaseSeeder` (opsional).
3. Jalankan server dengan perintah `php spark serve`.
4. Kunjungi `http://localhost:8080/`.
