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

<img width="1073" height="580" alt="tampilan install xampp" src="https://github.com/user-attachments/assets/f62d74af-f9da-493b-9473-95e9ea1fb6b5" />

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

<img width="997" height="650" alt="tampilan xampp" src="https://github.com/user-attachments/assets/2b7c9d4c-5418-4879-9974-d61772e5bf62" />
 
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

<img width="813" height="361" alt="tampilan htdocs (2)" src="https://github.com/user-attachments/assets/91b8b558-e601-46a5-8944-2662db1d0796" />

#### PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

input gambar

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

output gambar

#### PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

<img width="813" height="361" alt="tampilan htdocs (2)" src="https://github.com/user-attachments/assets/1c2699fb-a783-4790-a603-2aafba968d72" />

Kemudian untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php

<img width="838" height="450" alt="tamipilan php" src="https://github.com/user-attachments/assets/48dc54be-2805-4f48-b32b-4ec752ed9ac8" />

#### Menambahkan Variable PHP
Menambahkan variable pada program.

##### input
<img width="758" height="558" alt="code variable" src="https://github.com/user-attachments/assets/9a0a2f9a-82a1-4418-8e55-d5cc2ca93eca" />
##### output
<img width="734" height="404" alt="tampilan variable_php" src="https://github.com/user-attachments/assets/290438aa-f474-4430-9e85-f881be60142d" />


#### Predefine Variable $_GET

##### input
<img width="758" height="558" alt="code variable" src="https://github.com/user-attachments/assets/9a0a2f9a-82a1-4418-8e55-d5cc2ca93eca" />

##### output
<img width="709" height="346" alt="tampilan predefine_php" src="https://github.com/user-attachments/assets/660d9d66-46c1-44dd-928d-7cf0818be07c" />

#### Membuat Form Input

##### input

##### output
<img width="744" height="377" alt="tampilan form_php" src="https://github.com/user-attachments/assets/3721ff8a-34b5-4711-81a7-7820ca5a94a7" />

#### Membuat Operator

##### input
<img width="1032" height="1052" alt="code operator" src="https://github.com/user-attachments/assets/f2285689-3a1d-4932-9b51-d9fb71db1991" />

##### output
<img width="731" height="295" alt="tampilan_operator" src="https://github.com/user-attachments/assets/b32e02cd-f984-465b-bc93-a762b497fcec" />

#### Menambahkan Kondisi IF

##### input
<img width="1048" height="1166" alt="code kondisi if" src="https://github.com/user-attachments/assets/4607a73c-f67b-4458-a4d0-12a14a374d63" />

##### output
<img width="744" height="259" alt="tampilan if_php" src="https://github.com/user-attachments/assets/168b3884-2803-4c67-af7f-90e97f9bb546" />

#### Menambahkan Kondisi Switch

##### input
<img width="1002" height="1128" alt="code switch" src="https://github.com/user-attachments/assets/e67d6694-4386-42e7-9101-00f093ba31eb" />

##### output
<img width="733" height="317" alt="tampilan switch_php" src="https://github.com/user-attachments/assets/e4312d2e-ea43-4392-9b5d-b1fa9b96d66a" />

#### Membuat Perulangan for

##### input
<img width="1080" height="1204" alt="code for" src="https://github.com/user-attachments/assets/bce88241-dc96-49d8-91e9-6b47c68e3f07" />

##### output
<img width="1044" height="819" alt="tampilan for_php" src="https://github.com/user-attachments/assets/ed777ab6-d613-4946-8c0f-b707d33c91a8" />

#### Membuat Perulangan dowhile

##### input
<img width="894" height="1052" alt="code dowhile" src="https://github.com/user-attachments/assets/22fa302a-1bdc-44e1-8a98-c9dcc66d98ae" />

##### output
<img width="801" height="462" alt="Screenshot 2025-11-11 225757" src="https://github.com/user-attachments/assets/7d5071ea-9ed7-4a54-85a3-3c5e167b78a8" />

#### Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

##### input
<img width="1434" height="2420" alt="code tugas" src="https://github.com/user-attachments/assets/1160fa05-e45a-4a72-9829-10e0cf44e60e" />

##### output
<img width="1919" height="1063" alt="tampilan tugas_php" src="https://github.com/user-attachments/assets/7ad48df2-f098-4313-a0ea-4989e735add3" />

### KESIMPULAN
Melalui praktikum ini, saya memahami dasar-dasar pemrograman PHP mulai dari penggunaan variabel, operator, struktur kondisi, hingga perulangan. Selain itu, saya juga belajar cara memproses input pengguna menggunakan metode GET dan POST serta menampilkan hasilnya secara dinamis. Praktikum ini membantu membangun pondasi dalam pengembangan web berbasis server menggunakan PHP secara terstruktur dan interaktif
