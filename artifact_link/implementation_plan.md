# Implementation Plan: SMK Muhammadiyah 2 Kuningan History & Company Profile Website

We will build a modern, responsive, and elegant website for **SMK Muhammadiyah 2 Kuningan (DOS-Q 28)**. The design will draw inspiration from modern educational platforms like Apple and Microsoft Education, featuring a clean UI, plenty of whitespace, glassmorphism, rounded corners (20px), soft shadows, and smooth AOS (Animate on Scroll) animations.

## User Review Required

> [!IMPORTANT]
> - We will use the existing images in `d:\LAPRAK PKL ALDI` (e.g. `FARMASI.png`, `RPL.png`, `TJKT.png`, `TKR.png`, `TSM.png`, `logo.png`, `gedung2.jpg`, `foto laporan.jpg`) and copy/move them to the appropriate folders under `assets/img/` to ensure the website is pre-populated with real logos and local photos.
> - We will use premium, high-quality Unsplash image placeholders (configured via clean URL parameters) for the gallery, facilities, and hero slides where photos are missing, so the user can easily swap them later.

## Proposed Changes

### Folder Structure
We will create the project inside the `/history-smkmuh2/` folder as requested:
```
/history-smkmuh2/
├── index.php
├── css/
│   └── style.css
├── js/
│   └── script.js
├── assets/
│   └── img/
│       ├── logo.png
│       ├── hero/
│       ├── gallery/
│       ├── jurusan/
│       ├── founder/
│       └── fasilitas/
```

---

### [Component Name] Assets Setup

We will write a short setup script or manually move the existing images to their respective folders.
- `logo.png` -> `assets/img/logo.png`
- `FARMASI.png` -> `assets/img/jurusan/farmasi.png`
- `RPL.png` -> `assets/img/jurusan/rpl.png`
- `TJKT.png` -> `assets/img/jurusan/tjkt.png`
- `TKR.png` -> `assets/img/jurusan/tkr.png`
- `TSM.png` -> `assets/img/jurusan/tsm.png`
- `gedung2.jpg` -> `assets/img/hero/gedung2.jpg` (or used in Section Tentang)
- `foto laporan.jpg` -> `assets/img/hero/foto_laporan.jpg`

---

### [Component Name] Frontend & Layout

#### [NEW] [index.php](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/index.php)
- **Header/Navbar**: Sticky glassmorphism header, translucent background on scroll. Links to Beranda, Sejarah, Perkembangan, Jurusan, Galeri, Lokasi, Kontak.
- **Hero Section**: Bootstrap Carousel with dark overlay, bold typography, Poppins font, CTA buttons (Jelajahi Sejarah, Lihat Lokasi).
- **Tentang Section**: Grid with a local school image on the left and introduction text on the right. Includes an **Animated Counter** (Tahun Berdiri, Siswa Angkatan Pertama, Kampus, Program Keahlian).
- **Timeline Section**: Beautifully customized vertical timeline with timeline icons, representing milestones from 1995 to the present.
- **Tokoh Pendiri Section**: Card grid showcasing founders with hover effects.
- **Perkembangan Section**: Two-column layout with illustration/image on one side and progress description on the other.
- **Jurusan Section**: Interactive, premium cards with custom hover scale effects for the 5 programs, utilizing local logos.
- **Galeri Section**: Masonry layout utilizing Bootstrap and custom CSS. Clicking an image launches a lightbox (Bootstrap Modal).
- **Fasilitas Section**: Horizontal layout cards with icons and descriptions.
- **Lokasi Section**: Side-by-side card with Google Maps iframe embedding and local contact details.
- **Footer**: Modern footer, logo, descriptive links, social media widgets.

#### [NEW] [style.css](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/css/style.css)
- **Design Tokens**: Custom CSS variables for color scheme:
  - `--primary-color: #008D4C;`
  - `--secondary-color: #0B6B3A;`
  - `--accent-color: #F4C430;`
  - `--bg-color: #F8FAFC;`
  - `--text-color: #1F2937;`
  - `--card-radius: 20px;`
  - `--shadow-soft: 0 10px 30px rgba(0, 0, 0, 0.05);`
- **Classes**:
  - Transparent sticky glassmorphism navbar (`.navbar-custom`).
  - Custom timeline (`.timeline-custom`).
  - Hover zoom/scale animation (`.hover-scale`).
  - Dynamic gradient buttons and accents.
  - AOS animation refinements.

#### [NEW] [script.js](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/js/script.js)
- **Scroll Spy & Navbar styling**: Changes navbar background transparent/glassmorphism upon scroll.
- **Animated Counter**: Intersection Observer to trigger number counting when the statistics section enters the viewport.
- **Modal Lightbox**: Populates the modal with the clicked gallery image src.

---

## Verification Plan

### Automated & Manual Verification
- We will verify that files are successfully created and load all assets.
- We will double check CSS for responsiveness across screens (desktop, tablet, mobile).
- Check jQuery-free Bootstrap 5 capabilities (native JS for Modals, Carousels).
- Test Animated Counter logic and AOS animation rendering.
