# Aplikasi Manajemen Klinik dan Apotek Berbasis Web

<pre>
<img src="https://1.bp.blogspot.com/-jNEWRBZ6dlA/YQv-gsoMNmI/AAAAAAAABUI/KWFiKenx5SARDSMzOgYwk8tP45RaX7QlgCLcBGAsYHQ/s1920/2021-08-05.png" alt="dashboard"</img>
</pre>

Aplikasi ini merupakan proyek tugas akhir (Project Work) kelas 2 SMK untuk memenuhi syarat sebelum melaksanakan Praktek Kerja Industri (Prakerin). Dibangun menggunakan PHP Native v7 dan MySQL, aplikasi ini ditujukan untuk mempermudah pengelolaan data administrasi pada klinik dan unit apotek.

## Fitur Utama
* **Dashboard Interaktif**: Menggunakan template SB Admin 2 untuk tampilan yang responsif.
* **Manajemen Pasien & Dokter**: Input, edit, dan hapus data master medis.
* **Sistem Pendaftaran**: Kelola antrean dan registrasi pasien.
* **Rekam Medis & Tindakan**: Pencatatan tindakan rawat jalan/inap pasien.
* **Inventaris Apotek**: Manajemen stok obat dan kategori obat.
* **Transaksi Penjualan**: Modul kasir untuk penjualan obat disertai cetak nota.
* **Laporan Lengkap**: Cetak laporan data dokter, pasien, obat, pendaftaran, dan penjualan dalam format siap cetak.

## Teknologi yang Digunakan
* **Bahasa Pemrograman**: PHP 7 (Native)
* **Database**: MySQL
* **Frontend**: Bootstrap 4, SB Admin 2, FontAwesome
* **Library JS**: jQuery, Chart.js, DataTables

## Cara Instalasi
1. Clone repositori ini ke direktori server lokal Anda (misal: `htdocs`).
2. Buat database baru di phpMyAdmin dengan nama `db_klinikapotek`.
3. Import file database `db_klinikapotek.sql` ke database yang baru dibuat.
4. Sesuaikan konfigurasi koneksi database di file `config/koneksi.php`.
5. Buka browser dan akses `localhost/klinikapotek`.

## Demo User
* Username : admin
* Password : admin
<br>
* Username : klinik
* Password : klinik
<br>
* Username : apotek
* Password : apotek
</pre>

## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT.

---

### MIT License

Copyright (c) 2025 Kaka Maulana Abdillah

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
