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
|	|-- target/
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

Setelah mengunduh aplikasi ini, pastikan JDK dan Maven telah terinstall dan siap untuk dijalankan, untuk menjalankan aplikasi ini ada beberapa cara, diantaranya :

1. Menggunakan Console
	Pertama-tama masuk ke direktori folder tempat kita menyimpan file repositori yang telah kita download sebelumnya, masuk ke folder `java-client`, Compile dengan cara mengetik :

	```
	mvn clean package
	```

	Lalu, jalankan `Main.java` dengan cara mengetik :
	```
	mvn exec:java -Dexec.mainClass=com.firmansyah.imam.sewa.kendaraan.Main
	```

2. Menggunakan IDE Netbean
	`Klik File > Open Project` atau `Ctrl + Shift + O` untuk membuka project, arahkan ke direktori `java-client`. <br>
	Jalankan `Main.java` nya dengan cara `klik Run > Run File1` atau `Shift + F6`

	Tunggu hingga maven selesai mendownload repositori dependency yang dibutuhkan, jika berhasil maka akan muncul tampilan `Form Login` seperti gambar di bawah ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/java-client/07-form-login.png "Form Login")

3. Menjalankan aplikasi-sewa-kendaraan-1.0.jar

	Buka folder `target` yang ada pada folder `java-client`, lalu jalankan file `aplikasi-sewa-kendaraan-1.0.jar`

## Menggunakan Aplikasi

Setelah tahap [instalasi](#instalasi) selesai dan aplikasi telah berhasil dijalankan maka akan muncul `Form Login`

1. **Langkah Pertama** yang harus kita lakukan adalah mendaftar terlebih dahulu, klik Tombol **Register** untuk mendaftar, lalu akan muncul `Form Register` seperti gambar dibawah ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/01-form-register.png "Form Register")

2. Masukkan **Nama, Username, dan Password** untuk contoh saya menginput : 
	```
	Nama 		: administrator 
	Username 	: admin 
	Password 	: admin 
	```
	Jika Berhasil maka akan muncul notifikasi seperti ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/02-register-berhasil.png "Register Berhasil")

3. Login dengan **username** dan **password** yang telah dibuat sebelumnya, Jika Login Berhasil maka akan muncul notifikasi seperti ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/03-login-berhasil.png "Login Berhasil")

4. Berikut ini adalah tampilan utama Aplikasi Penyewaan Kendaraan

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/04-form-utama.png "Form Utama")

5. Ada **3 bagian** utama dalam Form Sewa

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/05-form-utama-deskripsi.png "Deskripsi Form Utama")

	Area yang **Berwarna Biru** merupakan bagian untuk menyimpan transaksi penyewaan, **ID Pelanggan** merupakan data yang otomatis dimunculkan sesuai dengan data pelanggan yang akan kita inputkan pada `Form Pelanggan`, begitu juga dengan **ID Kendaraan** yang otomatis akan dimunculkan sesuai dengan data kendaraan yang kita inputkan pada `Form Kendaraan`. <br>

	Area yang **Berwarna Merah** merupakan **tabel hasil penyimpanan** data transaksi dari area yang **Berwarna Biru** <br>

	Area yang **Berwarna Kuning** merupakan area tombol yang memiliki fungsinya masing-masing, untuk tombol : <br>
	- Simpan Transaksi digunakan untuk menyimpan transaksi dari area Berwarna Biru
	- Form User digunakan untuk memanggil Form User 
	- Form Kendaraan digunakan untuk memanggil Form Kendaraan 
	- Form Pelanggan digunakan untuk memanggil Form Pelanggan 
	- Form Keluar digunakan untuk Keluar dari Aplikasi 