# TP8DPBO2425C2

/saya Ajipati Alaga Putra dengan NIM 2409682 mengerjakan TP8 dalam mata kuliah DPBO untuk keberkahannya maka saya tidak akan melakukan kecurangan sepertu yang telah di spesifikasikan Aamiin./

```
# Lecturer & Course Management System (Native PHP – MVC)

Aplikasi ini adalah sistem manajemen data **Lecturers** dan **Courses** yang dibuat menggunakan **Native PHP** dengan arsitektur **MVC (Model–View–Controller)**.  
Tujuan dibuatnya aplikasi ini adalah untuk memahami konsep pemisahan logic dan tampilan, routing manual, serta struktur project yang bersih dan terorganisir.


# Fitur Aplikasi

## Modul Lecturers
- Melihat daftar lecturer
- Menambah lecturer baru
- Mengedit data lecturer
- Menghapus lecturer
- Validasi input sederhana

## Modul Courses
- Melihat daftar course
- Menambah course baru
- Mengedit course
- Menghapus course
- Tampilan dan alur sama agar konsisten dengan modul Lecturers

-------------------------------------------------------------

# Alur Program (Flow Detail)

1. **User membuka halaman**  
   Browser mengakses:  
   `index.php?route=lecturers`  
   atau  
   `index.php?route=courses`

2. **Routing (public/index.php)**  
   File index.php membaca parameter **route**  
   lalu memilih controller yang sesuai:
   - `LecturersController`
   - `CoursesController`

3. **Controller bekerja**  
   Controller bertugas:
   - memanggil model  
   - mengambil data  
   - memilih view untuk ditampilkan  
   - redirect setelah CRUD

4. **Model berhubungan dengan database**  
   Model melakukan:
   - SELECT
   - INSERT
   - UPDATE
   - DELETE

5. **View menampilkan data ke user**  
   Hanya berisi HTML + echo variabel dari controller.

6. **User berinteraksi lagi**  
   Misalnya klik Edit → kembali ke router → controller → model → view.

-------------------------------------------------------------

# Struktur Folder (Arsitektur MVC)

app/
│
├── config/
│   └── connection.php        (Koneksi database)
│
├── controllers/              (Mengatur alur aplikasi)
│   ├── LecturersController.php
│   └── CoursesController.php
│
├── models/                   (Query database)
│   ├── Lecturer.php
│   └── Course.php
│
├── views/
│   ├── lecturers/            (Halaman modul Lecturers)
│   │   ├── index.php
│   │   ├── create.php
│   │   ├── edit.php
│   │   └── delete.php
│   │
│   ├── courses/              (Halaman modul Courses)
│       ├── index.php
│       ├── create.php
│       ├── edit.php
│       └── delete.php
│
└── public/
    ├── index.php             (Router utama)
    └── assets/               (CSS / JS / Bootstrap)

-------------------------------------------------------------

# Struktur Database

TABLE: lecturers
- id (INT, PK, AUTO INC)
- name (VARCHAR)
- nidn (VARCHAR)
- phone (VARCHAR)
- join_date (DATE)

TABLE: courses
- id (INT, PK, AUTO INC)
- name (VARCHAR)
- sks (INT)



+-----------------------+
|       Lecturer        |
+-----------------------+
| - conn                |
| - table               |
+-----------------------+
| + all()               |
| + find(id)            |
| + create(data)        |
| + update(data)        |
| + delete(id)          |
+-----------------------+

+-----------------------+
|        Course         |
+-----------------------+
| - conn                |
| - table               |
+-----------------------+
| + all()               |
| + find(id)            |
| + create(data)        |
| + update(data)        |
| + delete(id)          |
+-----------------------+

+--------------------------------+
|    LecturersController         |
+--------------------------------+
| - lecturer (Model instance)    |
+--------------------------------+
| + index()                      |
| + create()                     |
| + store()                      |
| + edit()                       |
| + update()                     |
| + delete()                     |
+--------------------------------+

+--------------------------------+
|    CoursesController            |
+--------------------------------+
| - course (Model instance)       |
+--------------------------------+
| + index()                       |
| + create()                      |
| + store()                       |
| + edit()                        |
| + update()                      |
| + delete()                      |
+--------------------------------+

-------------------------------------------------------------

# Alur CRUD (Contoh Lecture)

## Create
Form → controller.store() → model.insert → redirect ke list

## Read
controller.index() → model.all() → view tabel

## Update
controller.edit() → model.find() → form edit  
controller.update() → model.update() → redirect

## Delete
controller.delete() → model.delete() → redirect

##Dokumentasi
