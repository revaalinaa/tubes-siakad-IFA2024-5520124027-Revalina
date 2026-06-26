# SIAKAD (Sistem Informasi Akademik)

Project ini merupakan aplikasi Sistem Informasi Akademik (SIAKAD) berbasis web menggunakan framework Laravel.

## Deskripsi

SIAKAD digunakan untuk membantu pengelolaan data akademik seperti data mahasiswa, dosen, mata kuliah, jadwal kuliah, dan KRS.

Sistem memiliki 2 hak akses pengguna:

1. Admin
2. Mahasiswa


## Fitur Sistem

### Admin

- Login Admin
- Dashboard Admin
- Kelola Data Dosen
- Kelola Data Mahasiswa
- Kelola Data Mata Kuliah
- Kelola Data Jadwal
- Kelola Data KRS
- CRUD Data


### Mahasiswa

- Login Mahasiswa
- Melihat Dashboard
- Melihat Jadwal Kuliah
- Mengambil Mata Kuliah (KRS)
- Melihat Daftar KRS
- Menghapus KRS
- Export KRS PDF


## Teknologi yang Digunakan

- Laravel 12
- PHP 8.2
- MySQL
- Blade Template
- Bootstrap/Tailwind CSS
- Composer


## Struktur Database

Database terdiri dari beberapa tabel:

- users
- mahasiswas
- dosens
- matakuliahs
- jadwals
- krs


## Relasi Database

- User memiliki satu data mahasiswa
- Mahasiswa memiliki banyak KRS
- Jadwal memiliki banyak KRS
- Dosen memiliki banyak Jadwal
- Mata Kuliah memiliki banyak Jadwal


## Instalasi Project


Clone repository:

```bash
git clone https://github.com/revaalinaa/tubes-siakad-IFA24-5520124027-Revalina.git
