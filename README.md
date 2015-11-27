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
	Jalankan `Main.java` nya dengan cara `klik Run > Run File1` atau `Shift + F6`

	Tunggu hingga maven selesai mendownload repositori dependency yang dibutuhkan, jika berhasil maka akan muncul tampilan `Form Login` seperti gambar di bawah ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/java-client/07-form-login.png "Form Login")

3. **Menjalankan aplikasi-sewa-kendaraan-1.0.jar** <br>

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

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/04-form-utama.png "Form Sewa")

5. Ada **3 bagian** utama dalam Form Sewa

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

	Kita bisa menambahkan **Username** baru agar dapat mengakses aplikasi ini melalui `Form Login`, dan untuk **Ubah, Hapus, dan Non Aktifkan Username** kita harus klik terlebih dahulu data yang ada pada tabel, setelah diklik makan kolom input akan otomatis terisi seperti gambar dibawah ini :

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/07-select-user.png "Select User")

	Tombol **Non Aktif** dipergunakan untuk menonaktifkan dan mengaktifkan `username`, jika status username **Non Aktif** maka username **tidak dapat login**

	Klik Tombol **Form Sewa** untuk kembali ke `Form Sewa`

7. Jika kita klik Tombol **Form Pelanggan** akan muncul tampilan seperti gambar di bawah ini:

	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/08-form-pelanggan.png "Form Pelaggan")

	Kita akan coba menginput data, sebagai contoh kita akan menginput data seperti dibawah ini : <br>
	```
	- Data yang pertama :
	Nama Pelanggan 	: Imam Firmansyah 
	Alamat 			: Depok 
	No. Telepon 	: 085781200013 
	No. Identitas 	: 123456789 
	
	- Data yang kedua :
	Nama Pelanggan 	: Dian Sapta 
	Alamat 			: Jakarta 
	No. Telepon 	: 085716607939 
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

9. Klik Tombol **Form Sewa** maka akan kembali ke `Form Sewa`
	kita bisa mulai menginput data penyewaan kendaraan, klik **Combo Box ID Pelangan** data yang telah kita masukan sebelumnya sudah dapat dipanggil melalui combo box,
	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/12-combo-box-pelanggan.png "Combo Box ID Pelanggan")

	Pilih ID Pelanggan maka akan muncul data pelanggan seperti gambar dibawah ini, sebagai contoh kita memilih **ID Pelanggan 1**
	![alt text](https://github.com/imamfirmansyah/aplikasi-sewa-kendaraan/blob/master/documentation/assets/img/aplikasi/13-data-pelanggan.png "Combo Box Data Pelanggan")
	