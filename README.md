# Aplikasi Sewa Kendaraan

Aplikasi ini dibuat dengan menggunakan bahasa pemrograman Java (untuk client) dan PHP (untuk server).
Dengan adanya aplikasi ini anda dapat dengan mudah mengelola kendaraan yang anda miliki, mengelola transaksi penyewaan dan mengelola data pelanggan.

Anda dapat menjalankan Aplikasi ini dari berbagai sistem operasi (Operating System) seperti Linux, Mac, atau pun Windows.

## Dokumentasi Penggunaan

- [Unduh Aplikasi](#unduh-aplikasi)
- [Struktur Data](#struktur-data)
- [Database](#database)
- [Instalasi](#instalasi)
- [Menggunakan Aplikasi](#menggunakan-aplikasi)
- [Instalasi Aplikasi Secara Lokal](#menggunakan-local)

## Unduh Aplikasi

- [Download versi terbaru dari Aplikasi Sewa Kendaraan](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/archive/master.zip)
- Clone repositori ini : `git clone https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan.git`

## Struktur Data

```
aplikasi-sewa-kendaraan/
|
|-- documentation
|   |-- assets/
|    `-- index.html
|
|-- java-client/
|   |-- src/
|    `- pom.xml
|
|-- java-server/
|   |-- app/
|   |   |-- models/
|   |    `- config.php
|   |-- vendor/
|   |-- .htaccess
|   |-- composer.json
|   |-- composer.lock
|   |-- database.sql
|    `- index.php
|
`- README.md
```

## Database

Aplikasi ini menggunakan 4 tabel, dan struktur database yang digunakan seperti gambar di bawah ini :

![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/database-structure.png "Struktur Database")

## Instalasi

Setelah mengunduh aplikasi ini, pastikan JDK dan Maven telah terinstall dan siap untuk dijalankan, ada 2 cara untuk menjalankan aplikasi ini :

##### 1. Menggunakan Console
Pertama-tama masuk ke direktori folder tempat kita menyimpan file repositori yang telah kita download sebelumnya, masuk ke folder `java-client`, Compile dengan cara mengetik :
```
mvn clean package
```

Lalu, jalankan `Main.java` dengan cara mengetik :
```
mvn exec:java -Dexec.mainClass=com.firmansyah.imam.sewa.kendaraan.Main
```

##### 2. Menggunakan IDE Netbean
'Klik File > Open Project' atau 'Ctrl + Shift + O' untuk membuka project, arahkan ke direktori `java-client`.
Jalankan 'Main.java' nya dengan cara `klik Run > Run File1 atau `Shift + F6`

Tunggu hingga maven selesai mendownload repositori dependency yang dibutuhkan, jika berhasil maka akan muncul tampilan `Form Login` seperti gambar di bawah ini :

![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/java-client/07-form-login.png "Form Login")
