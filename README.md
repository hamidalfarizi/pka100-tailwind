# PKA 100 Guidebook - Modern UI Edition

A premium, mobile-first guidebook application for **Pekan Perkenalan Khutbatu-l-'Arsy (PKA) 100** at Pondok Modern Darussalam Gontor. This application features a modern Emerald-themed design, built with Tailwind CSS and performance-optimized PHP.

## 🚀 Fitur Utama
- **Modern & Responsive:** Desain mobile-first dengan estetika premium.
- **Dark Mode Support:** Fitur mode gelap persisten menggunakan `localStorage`.
- **Multi-language Tool:** Dukungan Bahasa Indonesia, Inggris, dan Arab.
- **Lightweight:** Tidak bergantung pada `node_modules` berat (menggunakan Tailwind Standalone CLI).
- **Glassmorphism UI:** Animasi dan desain kartu modern.

## 🛠️ Stack Teknologi
- **Core:** PHP 7.4+
- **Styling:** Tailwind CSS (Custom Design System)
- **Icons:** FontAwesome 6
- **Scripts:** Vanilla JavaScript

---

## 📥 Panduan Penginstalan di Server

Ikuti langkah-langkah berikut untuk menjalankan aplikasi ini di server lokal atau produksi:

### 1. Prasyarat
- **Web Server:** Apache atau Nginx.
- **PHP:** Versi 7.4 ke atas.
- **Git:** Untuk klon repositori.

### 2. Kloning Repositori
Masuk ke direktori web server Anda (misalnya `/var/www/html/`) dan jalankan:
```bash
git clone https://github.com/user/pka100.git
cd pka100
```

### 3. Pengaturan Izin (Permissions)
Pastikan server memiliki izin untuk membaca file:
```bash
sudo chown -R www-data:www-data /var/www/html/pka100
sudo chmod -R 755 /var/www/html/pka100
```

### 4. Konfigurasi Tailwind CSS (Opsional)
Aplikasi ini sudah menyertakan file `css/output.css` yang sudah dikompilasi. Namun, jika Anda ingin melakukan perubahan pada gaya (CSS), Anda dapat menggunakan **Tailwind Standalone CLI** yang sudah tersedia di root:

**Cara Build CSS:**
```bash
./tailwindcss -i ./css/input.css -o ./css/output.css --watch
```
*(Pastikan file `./tailwindcss` memiliki izin eksekusi: `chmod +x tailwindcss`)*

### 5. Akses Aplikasi
Buka browser dan akses melalui:
`http://localhost/pka100` atau `http://domain-anda.com`

---

## 📁 Struktur Folder Utama
- `/assets`: Kumpulan gambar dan media pendukung.
- `/css`: Berisi `input.css` dan hasil build `output.css`.
- `/js`: Logika JavaScript utama.
- `/rentetan`: Halaman detail kegiatan PKA.
- `index.php`: Entry point aplikasi dan sistem routing.
- `navbar.php`: Navigasi global dengan dukungan Dark Mode.

## 📄 Lisensi
Hak Cipta &copy; 2026 **Panitia PKA 100 Gontor**.
Didesain untuk keunggulan pendidikan dan pengajaran.
