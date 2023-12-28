# Nama Aplikasi Web

KonserTix - Web Tiket Konser sederhana menggunakan PHP Native

## Persyaratan Sistem

Sebelum Anda memulai instalasi, pastikan sistem Anda memenuhi persyaratan berikut:

- [XAMPP](https://www.apachefriends.org/index.html) terinstal di komputer Anda.

## Langkah-langkah Instalasi

Berikut adalah langkah-langkah untuk menginstal aplikasi web ini:

1. **Clone Repositori**
    ```bash
    git clone https://github.com/namauser/nama-repo.git
    ```

2. **Pindah ke Direktori Proyek**
    ```bash
    cd nama-repo
    ```

3. **Inisialisasi Database**
    - Impor skema database dari file `database.sql` ke dalam MySQL Anda.

4. **Konfigurasi Koneksi Database**
    - Buka file `config/connection.php` dan sesuaikan pengaturan koneksi database dengan konfigurasi XAMPP Anda.

5. **Jalankan Aplikasi**
    - Buka browser dan akses `http://localhost/webtiketkonser`.


## Penggunaan Aplikasi

1. **Login Sebagai Admin**
    - Buka `http://localhost/webtiketkonser`.
    - Login sebagai admin dengan menggunakan akun berikut:
        - Username: admin
        - Password: admin123

2. **Login Sebagai Pengguna**
    - Untuk mengakses fitur pengguna, Anda dapat login dengan menggunakan akun berikut:
        - Username: user
        - Password: user123