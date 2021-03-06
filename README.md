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
- [Instalasi Server Aplikasi Secara Lokal](#instalasi-server-aplikasi-secara-lokal)
- [Informasi Kontak](#informasi-kontak)

Dokumentasi Penggunaan juga bisa anda lihat pada folder `documentation` atau bisa melalui Dokumentasi Online pada [link ini](http://kuliah.imamfirmansyah.com/documentation/)

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

- Folder documentation : berisi tentang **Dokumentasi** penggunaan
- Folder java-client : berisi tentang **Aplikasi Java** Sewa Kendaraan
- Folder java-server : berisi tentang **File PHP untuk Server** aplikasi java penyewaan kendaraan
- File README.md : Readme.md

## Database

Aplikasi ini menggunakan 4 tabel, dan struktur database yang digunakan seperti gambar di bawah ini :

![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/database-structure.png "Struktur Database")

## Instalasi

Setelah mengunduh aplikasi ini, pastikan JDK dan Maven telah terinstall dan siap untuk dijalankan, untuk menjalankan aplikasi ini ada beberapa cara, diantaranya :

1. **Menggunakan Console** <br>
	Pertama-tama masuk ke direktori folder tempat kita menyimpan file repositori yang telah kita download sebelumnya, masuk ke folder `java-client`, Compile dengan cara mengetik :

	```
	mvn clean package
	```

	Lalu, jalankan `Main.java` dengan cara mengetik :
	```
	mvn exec:java -Dexec.mainClass=com.firmansyah.imam.sewa.kendaraan.Main
	```

2. **Menggunakan IDE Netbean** <br>
	`Klik File > Open Project` atau `Ctrl + Shift + O` untuk membuka project, arahkan ke direktori `java-client`. <br>
	Jalankan `Main.java` nya dengan cara `klik Run > Run File` atau `Shift + F6`

	Tunggu hingga maven selesai mendownload repositori dependency yang dibutuhkan

3. **Menjalankan .jar** <br>

	Buka folder `target` yang ada pada folder `java-client`, lalu jalankan file `aplikasi-sewa-kendaraan-1.0.jar`

Jika Proses Instalasi berhasil maka akan muncul tampilan `Form Login` seperti gambar di bawah ini :

![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/java-client/01-form-login.png "Form Login")

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

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/04-form-utama.png "Form Sewa")

5. Ada **3 bagian** utama dalam `Form Sewa`

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/05-form-utama-deskripsi.png "Deskripsi Form Sewa")

	Area yang **Berwarna Biru** merupakan bagian untuk menyimpan transaksi penyewaan, **ID Pelanggan** merupakan data yang otomatis dimunculkan sesuai dengan data pelanggan yang akan kita inputkan pada `Form Pelanggan`, begitu juga dengan **ID Kendaraan** yang otomatis akan dimunculkan sesuai dengan data kendaraan yang kita inputkan pada `Form Kendaraan`. <br>

	Area yang **Berwarna Merah** merupakan **tabel hasil penyimpanan** data transaksi dari area yang **Berwarna Biru** <br>

	Area yang **Berwarna Kuning** merupakan area tombol yang memiliki fungsinya masing-masing, untuk tombol : <br>
	- Simpan Transaksi digunakan untuk menyimpan transaksi dari area Berwarna Biru
	- Tombol **Form User** digunakan untuk memanggil `Form User` 
	- Tombol **Form Kendaraan** digunakan untuk memanggil `Form Kendaraan` 
	- Tombol **Form Pelanggan** digunakan untuk memanggil `Form Pelanggan` 
	- Tombol **Form Keluar** digunakan untuk **Keluar** dari Aplikasi 

6. Jika kita klik Tombol **Form User** akan muncul tampilan seperti gambar di bawah ini:

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/06-form-user.png "Form User")

	Kita bisa menambahkan **Username** baru agar dapat mengakses aplikasi ini melalui `Form Login`, dan untuk **Ubah, Hapus, dan Non Aktifkan Username** kita harus klik terlebih dahulu data yang ada pada tabel, setelah diklik maka kolom input akan otomatis terisi seperti gambar dibawah ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/07-select-user.png "Select User")

	Tombol **Non Aktifkan** dipergunakan untuk menonaktifkan dan mengaktifkan `username`, jika status username **Non Aktif** maka username **tidak dapat login**

	Klik Tombol **Form Sewa** untuk kembali ke `Form Sewa`

7. Jika kita klik Tombol **Form Pelanggan** akan muncul tampilan seperti gambar di bawah ini:

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/08-form-pelanggan.png "Form Pelaggan")

	Kita akan coba menginput data, sebagai contoh kita akan menginput data seperti dibawah ini : <br>
	```
	- Data yang pertama :
	Nama Pelanggan 	: Imam Firmansyah 
	Alamat 			: Depok 
	No. Telepon 	: 085712345678 
	No. Identitas 	: 123456789 
	
	- Data yang kedua :
	Nama Pelanggan 	: Dian Sapta 
	Alamat 			: Jakarta 
	No. Telepon 	: 085787654321 
	No. Identitas 	: 987654321 
	```

	Dan di bawah ini adalah hasil dari data yang telah kita inputkan :
	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/09-form-pelanggan-sample-data.png "Data Form Pelaggan")

	Klik Tombol **Form Sewa** untuk kembali ke `Form Sewa`

8. Kita akan coba menginput Data Kendaraan, klik Tombol **Form Kendaraan** maka akan muncul tampilan seperti di bawah ini : 
	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/10-form-kendaraan.png "Form Kendaraan")

	Kita akan coba menginput data, sebagai contoh kita akan menginput data seperti dibawah ini : 
	``` 
	- Data yang pertama : 
	No. Polisi 		: B 1234 XYZ 
	Nama Kendaraan 	: Honda - Jazz 
	Tahun Kendaraan : 2014 
	Biaya Sewa 		: 250000 
	
	- Data yang kedua :
	No. Polisi 		: B 5678 VWX 
	Nama Kendaraan 	: Toyota - Avanza 
	Tahun Kendaraan : 2015 
	Biaya Sewa 		: 200000 
	```
	Dan di bawah ini adalah hasil dari data yang telah kita inputkan :
	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/11-form-kendaraan-sample-data.png "Data Form Kendaraan")

	Klik Tombol **Form Sewa** untuk kembali ke `Form Sewa`

9. Kita bisa mulai menginput data penyewaan kendaraan, klik **Combo Box ID Pelangan** data yang telah kita masukan sebelumnya sudah dapat dipanggil melalui combo box, <br>
	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/12-combo-box-pelanggan.png "Combo Box ID Pelanggan") <br>

	Pilih ID Pelanggan maka akan muncul data pelanggan seperti gambar dibawah ini, <br>
	sebagai contoh kita memilih **ID Pelanggan 1**<br>
	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/13-data-pelanggan.png "Combo Box Data Pelanggan") <br>

	Begitu juga dengan **ID Kendaraan**,

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/14-data-kendaraan.png "Combo Box Data Kendaraan")

10. Kita akan mencoba menginput data transaksi penyewaan, pilih tanggal awal penyewaan dan tanggal akhir penyewaan, sebagai contoh kita inputkan data seperti gambar di bawah ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/15-data-transaksi.png "Combo Box Data Pelanggan")

	Maka pada tabel transaksi akan muncul data yang telah kita inputkan, <br>

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/16-data-transaksi-sample.png "Data Transaksi")

	Klik transaksi pada tabel transaksi untuk melihat detail dari transaksi penyewaan yang telah kita inputkan <br>

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/17-detail-transaksi.png "Detail Transaksi")
	
	Terdapat informasi mengenai transaksi penyewaan kendaraan, diantaranya lamanya waktu, biaya sewa dan kendaraan apa yang di sewa serta identitas pelanggan yang menyewa kendaraan tersebut, fungsi tombol **Sewa Selesai** merupakan tombol yang berfungsi untuk mengganti status dari **Di Sewakan** menjadi **Selesai**

11. Karena **Data Pelanggan, Data Kendaraan** memiliki relasi dengan **Data Transaksi Sewa** maka setiap kendaraan yang telah disewa, status kendaraan akan berganti dari **Tersedia** menjadi **Tidak Tersedia**

12. Klik tombol **Keluar** untuk keluar dari aplikasi

## Instalasi Server Aplikasi Secara Lokal

Anda juga dapat menjalankan aplikasi ini secara lokal melalui jaringan lokal yang anda miliki, misalkan saya ingin mencoba aplikasi ini pada perangkat laptop saya dan mencobanya melalui `localhost` menggunakan `apache` yang sudah tersedia dalam aplikasi `XAMPP`

1. Langkah pertama yang harus saya lakukan adalah masuk ke direktori folder tempat menyimpan file repositori yang telah didownload sebelumnya, masuk ke folder `java-server`, saya *copy* seluruh isi pada folder tersebut (lihat [struktur data](#struktur-data)) dan *paste* pada folder `xampp\htdocs\java-server`

2. Buatlah **database**, anda bisa mengunakan `phpmyadmin` dan **import** file `database.sql` yang terdapat pada folder `java-server` pada database yang telah anda buat sebelumnya

3. Buka direktori `htdocs > java-server`, lalu *edit* file `config.php` yang ada pada folder `app > config.php` melalui text editor :
	``` php
	<?php
	
	use Illuminate\Database\Capsule\Manager as Capsule;
	
	/**
	 * Configure the database and boot Eloquent
	 */
	
	$capsule = new Capsule;
	
	$capsule->addConnection(array(
	    'driver'    => 'mysql',
	    'host'      => 'YOUR_HOST',
	    'database'  => 'YOUR_DATABASE',
	    'username'  => 'YOUR_USERNAME',
	    'password'  => 'YOUR_PASSWORD',
	    'charset'   => 'utf8',
	    'collation' => 'utf8_general_ci',
	    'prefix'    => ''
	));
	
	$capsule->setAsGlobal();
	
	$capsule->bootEloquent();
	
	// set timezone for timestamps etc
	date_default_timezone_set('UTC');
	```
	
	Isikan data diatas sesuai dengan host, database, username, dan password pada database anda

4. Buka `browser` dan ketik pada kolom `URL` dengan `localhost/java-server`, jika muncul tulisan seperti di bawah ini
	```
	Hello Selamat Datang Di Rest API Aplikasi Penyewaan Kendaraan
	```
	Maka `java-server` sudah siap untuk digunakan

5. langkah terakhir adalah mengganti `Path URL` Aplikasi Sewa Kendaraan, buka file `Path.java` yang ada pada folder `java-client\src\main\java\com\firmansyah\imam\sewa\kendaraan` melalui text editor :
	``` java
	package com.firmansyah.imam.sewa.kendaraan;

	public class Path {
    
    	public static String serverURL = "http://kuliah.imamfirmansyah.com/java-server";
       
	}
	```
	secara *default* `Path URL` Aplikasi Sewa Kendaraan mengarah ke alamat `http://kuliah.imamfirmansyah.com/java-server`, ubah dengan alamat local yang telah kita buat sebelumnya menjadi `localhost/java-server`

6. Jalankan kembali Aplikasi Sewa Kendaraan, dan Aplikasi berjalan melalui server dari `localhost` yang telah kita buat. <br>
	Cara ini pun berlaku jika anda ingin mengupload `java-server` pada `hosting` dan `domain` yang anda miliki, sesuaikan konfigurasi **database** dengan database yang ada di hosting anda dan **Path URL** dengan alamat `domain` anda

## Informasi Kontak

Terima Kasih, <br>
Jika ada pertanyaan mengenai Aplikasi Sewa Kendaraan silahkan hubungi saya melalui informasi kontak di bawah ini : <br>

Facebook : [Imam Firmansyah](https://facebook.com/imamfirmansyah27) <br> 
Github 	: [https://github.com/imamfirmansyah](https://github.com/imamfirmansyah) <br>
Twitter	: [@imamfirman](https://twitter.com/imamfirman) <br>
Email 	: [hubungi@imamfirmansyah.com](mailto:hubungi@imamfirmansyah.com)