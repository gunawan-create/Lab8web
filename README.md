## LAPORAN PRAKTIKUM 8
#### Nama : Ali Gunawan 
#### Kelas : TI.24.A3
#### NIM: 312410400
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
## Persiapan
Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP
terlebih dahulu. Web servar yang kita gunakan adalah Apache 2 dan interpreter PHP 7.
Untuk memudahkan proses praktikum, kita gunakan aplikasi bundle web server yaitu
XAMPP.
 
## Menginstall XAMPP
Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi
portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan
direktorinya (misal: d:\xampp).

<img width="1073" height="580" alt="tampilan install xampp" src="https://github.com/user-attachments/assets/f62d74af-f9da-493b-9473-95e9ea1fb6b5" />

## Konfigurasi Web Server
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

## Menjalankan Web Server
Untuk menjalankan web server dari menu XAMPP Control.

<img width="997" height="650" alt="tampilan xampp" src="https://github.com/user-attachments/assets/2b7c9d4c-5418-4879-9974-d61772e5bf62" />

1)Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost
Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.

2)Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\

3)Database MySQL
Direktori: \xampp\mysql\

Manajemen database: http://localhost/phpmyadmin

## Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

<img width="813" height="361" alt="tampilan htdocs (2)" src="https://github.com/user-attachments/assets/91b8b558-e601-46a5-8944-2662db1d0796" />

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

<img width="838" height="450" alt="tamipilan php" src="https://github.com/user-attachments/assets/e7890271-35c2-42de-801a-c4e5df9327d2" />

Struktur folder dibuat di dalam direktori htdocs pada XAMPP dengan nama lab7_php_dasar. Folder ini berisi semua file latihan PHP mulai dari dasar hingga tugas akhir. Penempatan file di dalam folder ini penting agar dapat diakses melalui browser dengan URL http://localhost/lab7_php_dasar/. Struktur ini mencerminkan alur praktikum dari tahap pengenalan PHP hingga implementasi logika pemrograman.

## PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

### input

<img width="1448" height="824" alt="code php dasar" src="https://github.com/user-attachments/assets/0bde2b5a-2ff8-4612-bacd-89bc1c871554" />

### output

<img width="719" height="343" alt="tampilan php_dasar" src="https://github.com/user-attachments/assets/a3b62091-e787-46f7-8e58-978f847cfe51" />

File ini digunakan untuk memastikan bahwa PHP sudah berjalan dengan benar di server lokal. Di dalamnya terdapat perintah echo "Hello World"; untuk menampilkan teks ke layar. Fungsi dari file ini adalah memperkenalkan cara menulis sintaks PHP di dalam file HTML dan membedakan bagian yang dijalankan oleh server (PHP) dan yang ditampilkan oleh browser (HTML).

## Menambahkan Variable PHP
Menambahkan variable pada program.

### input
<img width="758" height="558" alt="code variable" src="https://github.com/user-attachments/assets/9a0a2f9a-82a1-4418-8e55-d5cc2ca93eca" />

### output
<img width="734" height="404" alt="tampilan variable_php" src="https://github.com/user-attachments/assets/290438aa-f474-4430-9e85-f881be60142d" />

File ini berfungsi untuk mengenalkan variabel dalam PHP. Di dalamnya didefinisikan variabel $nim dan $nama kemudian ditampilkan menggunakan echo. Melalui latihan ini, mahasiswa memahami cara menyimpan dan menampilkan nilai dari variabel serta perbedaan antara penggunaan tanda kutip tunggal dan ganda dalam PHP.

## Predefine Variable $_GET

### input
<img width="758" height="558" alt="code variable" src="https://github.com/user-attachments/assets/9a0a2f9a-82a1-4418-8e55-d5cc2ca93eca" />

### output
<img width="709" height="346" alt="tampilan predefine_php" src="https://github.com/user-attachments/assets/660d9d66-46c1-44dd-928d-7cf0818be07c" />

Pada file ini diperkenalkan predefine variable $_GET yang digunakan untuk menangkap data dari URL. Program ini menampilkan nama sesuai dengan nilai yang dikirim melalui URL, misalnya ?nama=Agung. Tujuannya agar mahasiswa memahami cara pengambilan data yang dikirim melalui metode GET dan bagaimana menampilkannya di halaman web.

## Membuat Form Input

### input

### output
<img width="744" height="377" alt="tampilan form_php" src="https://github.com/user-attachments/assets/3721ff8a-34b5-4711-81a7-7820ca5a94a7" />

File ini menampilkan form sederhana untuk menginput nama, lalu menangkapnya menggunakan metode POST dengan $_POST['nama']. Saat tombol diklik, nama yang diinput akan ditampilkan di bawah form. Latihan ini memperkenalkan cara pengiriman data dari pengguna melalui form HTML ke script PHP dan perbedaan antara metode GET dan POST.

## Membuat Operator

### input
<img width="1032" height="1052" alt="code operator" src="https://github.com/user-attachments/assets/f2285689-3a1d-4932-9b51-d9fb71db1991" />

### output
<img width="731" height="295" alt="tampilan_operator" src="https://github.com/user-attachments/assets/b32e02cd-f984-465b-bc93-a762b497fcec" />

File ini digunakan untuk memahami operator aritmatika dalam PHP. Program menghitung gaji bersih setelah pajak menggunakan variabel $gaji dan $pajak. Hasil perhitungannya ditampilkan dengan echo. Tujuannya adalah melatih penggunaan operator matematika dasar seperti perkalian dan pengurangan dalam pemrograman PHP.

## Menambahkan Kondisi IF

### input
<img width="1048" height="1166" alt="code kondisi if" src="https://github.com/user-attachments/assets/4607a73c-f67b-4458-a4d0-12a14a374d63" />

### output
<img width="744" height="259" alt="tampilan if_php" src="https://github.com/user-attachments/assets/168b3884-2803-4c67-af7f-90e97f9bb546" />

Latihan ini memperkenalkan struktur kondisi IF. Program memeriksa nilai dari fungsi date("l") untuk menentukan hari apa saat ini, lalu menampilkan hasilnya berdasarkan kondisi. Tujuan latihan ini adalah memahami bagaimana program bisa mengambil keputusan berdasarkan kondisi tertentu.

## Menambahkan Kondisi Switch

### input
<img width="1002" height="1128" alt="code switch" src="https://github.com/user-attachments/assets/e67d6694-4386-42e7-9101-00f093ba31eb" />

### output
<img width="733" height="317" alt="tampilan switch_php" src="https://github.com/user-attachments/assets/e4312d2e-ea43-4392-9b5d-b1fa9b96d66a" />

File ini melanjutkan pembelajaran kondisi menggunakan struktur switch-case. Program mengecek nilai hari dengan date("l") dan menampilkan hasil sesuai kasus yang cocok. Struktur switch digunakan untuk menggantikan if-elseif agar lebih efisien saat membandingkan banyak kondisi.

## Membuat Perulangan for

### input
<img width="1080" height="1204" alt="code for" src="https://github.com/user-attachments/assets/bce88241-dc96-49d8-91e9-6b47c68e3f07" />

### output
<img width="1044" height="819" alt="tampilan for_php" src="https://github.com/user-attachments/assets/ed777ab6-d613-4946-8c0f-b707d33c91a8" />

File ini digunakan untuk mempelajari perulangan for. Program menampilkan urutan angka dari 1 hingga 10 dan juga dari 10 ke 1. Latihan ini memperlihatkan cara kerja loop for dengan inisialisasi, kondisi, dan increment/decrement untuk mengulang proses secara otomatis.

## Membuat Perulangan while

## input
<img width="880" height="1052" alt="code while" src="https://github.com/user-attachments/assets/be4c29ae-c27e-4d3d-ad4f-bc3097235ce7" />

## output
<img width="777" height="473" alt="tampilan while_php" src="https://github.com/user-attachments/assets/8a8cf9d5-359c-423b-98b5-8ec40e9c79e8" />

Program ini menampilkan perulangan menggunakan while loop yang akan terus berjalan selama kondisi bernilai benar. Contohnya, menampilkan angka 1 sampai 10. Latihan ini membantu memahami perulangan yang bergantung pada kondisi yang diperiksa di awal setiap iterasi.

## Membuat Perulangan dowhile

## input
<img width="894" height="1052" alt="code dowhile" src="https://github.com/user-attachments/assets/22fa302a-1bdc-44e1-8a98-c9dcc66d98ae" />

## output
<img width="801" height="462" alt="Screenshot 2025-11-11 225757" src="https://github.com/user-attachments/assets/7d5071ea-9ed7-4a54-85a3-3c5e167b78a8" />

Program ini juga menampilkan perulangan tetapi menggunakan do-while loop. Perbedaannya dengan while adalah perintah di dalam loop dijalankan terlebih dahulu baru kemudian kondisi diperiksa. Hasil tampilannya sama seperti while, namun dengan logika eksekusi yang berbeda.

## Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

### input
<img width="1434" height="2420" alt="code tugas" src="https://github.com/user-attachments/assets/1160fa05-e45a-4a72-9829-10e0cf44e60e" />

### output
<img width="1919" height="1063" alt="tampilan tugas_php" src="https://github.com/user-attachments/assets/7ad48df2-f098-4313-a0ea-4989e735add3" />

Pada form ini menampilkan menginput nama, tanggal lahir, dan pekerjaan. Setelah data dikirim, PHP menghitung umur berdasarkan tanggal lahir dan menentukan gaji sesuai pekerjaan yang dipilih melalui struktur switch. Hasil akhirnya ditampilkan dalam format vertikal (atas ke bawah) di bawah form. Tujuan latihan ini adalah memahami alur logika lengkap dari input data, proses pengolahan, hingga menampilkan output secara dinamis menggunakan PHP.

## KESIMPULAN
Melalui praktikum ini, saya memahami dasar-dasar pemrograman PHP mulai dari penggunaan variabel, operator, struktur kondisi, hingga perulangan. Selain itu, saya juga belajar cara memproses input pengguna menggunakan metode GET dan POST serta menampilkan hasilnya secara dinamis. Praktikum ini membantu membangun pondasi dalam pengembangan web berbasis server menggunakan PHP secara terstruktur dan interaktif
