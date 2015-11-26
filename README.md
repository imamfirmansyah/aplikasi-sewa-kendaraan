# Aplikasi Sewa Kendaraan

Aplikasi ini dibuat dengan menggunakan bahasa pemrograman Java (untuk client) dan PHP (untuk server).
Dengan adanya aplikasi ini anda dapat dengan mudah mengelola kendaraan yang anda miliki, mengelola transaksi penyewaan dan mengelola data pelanggan.

Anda dapat menjalankan Aplikasi ini dari berbagai sistem operasi (Operating System) seperti Linux, Mac, atau pun Windows.

## Dokumentasi Penggunaan

- [Unduh Aplikasi](#unduh-aplikasi)
- [Struktur Data](#struktur-data)
- [Struktur Database](#struktur-database)
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

## Struktur Database

Aplikasi ini menggunakan 4 tabel
##### Tabel User
| Name  | Type | Extras |
| ----- |:----:| :------: |
| id  | int | Primary Key   |
| nama | varchar | - |
| username | varchar | - |
| password | text | - |
| status | char | - |
| created_at | timestamp | - |

##### Tabel Kendaraan
| Name  | Type | Extras |
| ----- |:----:| :------: |
| id  | int | Primary Key   |
| no_polisi | varchar | - |
| nama_kendaraan | varchar | - |
| tahun_kendaraan | varchar | - |
| biaya_sewa | char | - |
| status | char | - |

##### Tabel Pelanggan
| Name  | Type | Extras |
| ----- |:----:| :------: |
| id  | int | Primary Key   |
| nama_pelanggan | varchar | - |
| alamt | text | - |
| no_telp | varchar | - |
| no_identitas | char | - |

##### Tabel Sewa
| Name  | Type | Extras |
| ----- |:----:| :------: |
| id  | int | Primary Key   |
| tanggal_sewa | timestamp | - |
| id_pelanggan | int | Foreign Key |
| tanggal_mulai | date | - |
| tanggal_akhir | date | - |
| id_kendaraan | int | Foreign Key
| status | char | - |

