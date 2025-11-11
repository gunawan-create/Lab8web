## LAPORAN PRAKTIKUM 8
### LATAR BELAKANG PHP
PHP adalah singkatan dari PHP Hypertext Prepocessor dan merupakan bahasa
pemrograman yang di desain khusus untuk web development atau pengembangan web.
PHP memiliki sifat Server-Side karena PHP dijalankan atau di eksekusi dari sisi server.
maksud di jalankan dari sisi server adalah PHP di jalankan pada komputer server dan
bukan pada komputer client. PHP di jalankan melalui aplikasi web browser sama halnya
seperti HTML. Hampir semua situs-situs besar dan populer di kembangkan menggunakan
PHP. seperti misalnya wordpress, joomla, facebook, twitter, wikipedia dan situs besar
lainnya.

### INSTRUKSI PRAKTIKUM
1) Persiapkan text editor misalnya VSCode.
  
2) Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs)
  
3) Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

### LANGKAH - LANGKAH PRAKTIKUM
#### Persiapan
Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP
terlebih dahulu. Web servar yang kita gunakan adalah Apache 2 dan interpreter PHP 7.
Untuk memudahkan proses praktikum, kita gunakan aplikasi bundle web server yaitu
XAMPP.
 
#### Menginstall XAMPP
Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi
portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan
direktorinya (misal: d:\xampp).

gambar

#### Konfigurasi Web Server
1) Konfigurasi Apache
Untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul
yang diaktifkan, lokasi document root, dll.
Lokasi file: \xampp\apache\conf\httpd.conf

2) Konfigrasi PHP
Untuk konfigurasi perilaku engine PHP yang berefek pada keamanan dan performa.
Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error
reporting, dll.
Lokasi file: \xampp\php\php.ini

3) Konfigrasi MySql
Konfigurasi server MySQL, seperti administrator user, port, timezone, dll.
Lokasi file: \xampp\mysql\bin\my.ini

#### Menjalankan Web Server
Untuk menjalankan web server dari menu XAMPP Control.

gambar 

1) Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost
Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.

2)Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\

3)Database MySQL
Direktori: \xampp\mysql\

Manajemen database: http://localhost/phpmyadmin

#### Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

gambar

PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

input gambar

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

output gambar

#### Membuat PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

input gambar

Kemudian untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php

#### Menambahkan Variable PHP
Menambahkan variable pada program.

input gambar

output gambar

#### Predefine Variable $_GET

input gambar

dan output gambar

#### Membuat Form Input

input gambar

dan output gambar

#### Membuat Operator

input gambar

dan output gambar

#### Menambahkan Kondisi IF

input gambar

dan output gambar

#### Menambahkan Kondisi Switch

input gambar

dan output gambar

#### Membuat Perulangan for

input gambar

dan output gambar

#### Membuat Perulangan dowhile

input gambar

dan output gambar

#### Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

input gambar

dan output gambar

### KESIMPULAN

