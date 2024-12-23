# Projek Web Kuliah Semester 3 Web Programming✨
Pada tugas ini, kami diberikan tantangan untuk mengembangkan sebuah situs web menggunakan framework PHP, yaitu CodeIgniter 3. Inspirasi utama proyek ini berasal dari situs kos.id, namun saya memfokuskan pengembangan pada Solid Store.

Solid Store adalah sebuah toko online yang dirancang untuk memenuhi kebutuhan furnitur rumah, dengan prioritas pada pengalaman pengguna yang modern dan responsif.

Solid Store menawarkan berbagai kategori furnitur, di antaranya:

- Perlengkapan ruang keluarga, seperti sofa, meja, dan kursi.
- Hiasan dinding, untuk menambah keindahan dan estetika rumah.


## 🖼️ Tampilan Menu
![firefox_iCMhnh3s5l](https://github.com/user-attachments/assets/ee774384-c8e3-4cad-815b-21ca34ddae14)

## 🔒 Tampilan Login
![firefox_aTNgoDxWIX](https://github.com/user-attachments/assets/1f658d1a-5afb-4442-be7c-287d5428ca9b)

## 📝 Tampilan Register
![firefox_L1OXxRCkcn](https://github.com/user-attachments/assets/64e4acc8-851e-410f-821c-c51fe845136b)

## 🛒 Tampilan Admin - Product
![firefox_Cd4MG64Qih](https://github.com/user-attachments/assets/edc5e192-20f2-4604-aeef-dade8c842583)

## 📜 Tampilan Admin - Invoice
![firefox_xslWjsX8HE](https://github.com/user-attachments/assets/9fbf6a35-5798-4e58-bed9-c246cbe5e44b)


## 🚀 Tech Stack Used
- HTML, CSS , Javascript
- Bootstrap
- PHP, CodeIgniter 3

  ## 🔧 Panduan Instalasi

### Prasyarat

- **PHP 7.x atau lebih baru**
- **Web Server Apache**
- **MySQL Database Server**

---

### Langkah-langkah Instalasi

#### 1. Clone atau Download Repositori:

**Clone repositori:**

```bash
git clone https://github.com/auliyaapri/Projek-Web-Kuliah-Semester-3.git
cd Projek-Web-Kuliah-Semester-3
```

**Atau download repositori sebagai file ZIP dan ekstrak:**

```bash
cd path/to/extracted-folder
```

---

#### 2. Ubah nama direktori proyek:

Pindahkan folder proyek ke dalam direktori **xampp/htdocs** atau sejenisnya:

```bash
mv Projek-Web-Kuliah-Semester-3 solid_store
cd solid_store
```

---


---

#### 3. Buat Basis Data:

- Buat basis data baru di server MySQL Anda dengan nama **`db_kost`**.

---

#### 4. Import Basis Data:

- Import file SQL **`db_solid_store.sql`** yang disediakan ke dalam basis data MySQL Anda. Pastikan file ini berada di direktori yang sesuai di komputer Anda.

- Gunakan terminal atau alat seperti phpMyAdmin untuk mengimpor:

```bash
mysql -u your-username -p db_solid_store < path/to/db_solid_store.sql
```

- Jika menggunakan phpMyAdmin, unggah file SQL tersebut melalui antarmuka import.

---

#### 5. Konfigurasi Aplikasi:

- Perbarui konfigurasi basis data di **`application/config/database.php`**:

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'your-username',
    'password' => 'your-password',
    'database' => 'db_solid_store',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

---

#### 6. Jalankan Aplikasi:

- Mulai server Apache Anda.
- Buka browser, lalu navigasikan ke **[http://localhost/solid_store](http://localhost/solid_store)** atau sesuai dengan konfigurasi yang Anda gunakan.

---



