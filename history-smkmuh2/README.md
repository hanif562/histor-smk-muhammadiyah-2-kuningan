# 🚀 SMK Muhammadiyah 2 Kuningan (DOS-Q 28) - Website Sejarah & Profil

Website resmi Sejarah & Profil SMK Muhammadiyah 2 Kuningan.

---

## 🛠️ File Konfigurasi Environment & GitHub

1. **`.env`** (Lokal): Menyimpan konfigurasi lokal (Aplikasi, Database, Kontak). **Jangan pernah push file ini ke GitHub!**
2. **`.env.example`**: Template konfigurasi aman yang di-push ke GitHub untuk acuan variabel environment di server hosting.
3. **`.gitignore`**: Memastikan file sensitif seperti `.env` dan file temporary OS tidak ikut terupload ke GitHub.
4. **`config.php`**: Loader otomatis untuk membaca file `.env` di PHP.

---

## 📌 Cara Push ke GitHub

Buka terminal di folder project `history-smkmuh2` lalu jalankan perintah berikut:

```bash
git init
git add .
git commit -m "Initial commit - Website Sejarah SMK Muhammadiyah 2 Kuningan"
git branch -M main
git remote add origin https://github.com/USERNAME-ANDA/NAMA-REPO-ANDA.git
git push -u origin main
```

---

## 🌐 Cara Setup di Server Hosting (cPanel / Shared Hosting / Vercel / Railway / Render)

### Option A: Shared Hosting / cPanel (Hostinger, Niagahoster, dll.)
1. Upload semua file project dari GitHub / ZIP ke folder `public_html` atau subfolder domain Anda.
2. Buat file `.env` baru di server hosting (atau rename `.env.example` menjadi `.env`).
3. Sesuaikan isi `.env` di hosting sesuai dengan environment produksi (domain, database hosting, dll.).

### Option B: Vercel / Netlify / Railway / Render
1. Hubungkan repository GitHub Anda ke layanan hosting.
2. Masukkan variabel yang ada di `.env.example` ke menu **Environment Variables** pada dashboard hosting Anda.
