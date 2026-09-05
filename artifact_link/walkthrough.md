# Project Walkthrough: SMK Muhammadiyah 2 Kuningan History & Company Profile

We have successfully developed a modern, premium, and fully responsive History and Company Profile website for **SMK Muhammadiyah 2 Kuningan (DOS-Q 28)**.

The design features a clean layout, customized vertical timeline, interactive statistics counter, responsive masonry gallery with modal image viewing, and elegant green gradient buttons matching the school's theme colors.

---

## File and Directory Structure
The following structure has been established in the `/history-smkmuh2/` project folder:

* **[index.php](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/index.php)**: The main PHP entry point. Contains semantic HTML5 tags and standard Bootstrap grid layouts.
* **[css/style.css](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/css/style.css)**: Custom CSS stylesheets containing theme configurations (green gradients, custom vertical timeline nodes, masonry grid, and card animations).
* **[js/script.js](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/js/script.js)**: Vanilla JavaScript handling glassmorphism scroll animations, dynamic statistics counting via Intersection Observer, scroll navigation tracking, and lightbox modal triggers.
* **Assets**:
  * **[assets/img/logo.png](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/assets/img/logo.png)**: Official school logo.
  * **[assets/img/hero/gedung2.jpg](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/assets/img/hero/gedung2.jpg)**: Main school building hero cover image.
  * **[assets/img/gallery/foto_laporan.jpg](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/assets/img/gallery/foto_laporan.jpg)**: School activities gallery image.
  * **[assets/img/jurusan/](file:///d:/LAPRAK%20PKL%20ALDI/history-smkmuh2/assets/img/jurusan/)**: Individual program logos (`tkr.png`, `tsm.png`, `tjkt.png`, `farmasi.png`, `rpl.png`).

---

## Key Features & Implementations

### 1. Transparent Glassmorphism Navbar
- **Implementation**: In `.navbar-custom` (within `style.css`), the navbar starts transparent with white text when at the top of the page. Once the page is scrolled beyond 50px, `script.js` adds the `.scrolled` class, turning the navbar into a light translucent glassmorphism container (`backdrop-filter: blur(15px)`) with dark text and a subtle drop shadow.

### 2. Dark Overlay Hero Carousel
- **Implementation**: The hero carousel features three slides with a dark gradient overlay. Buttons utilize custom scale-hover transitions.

### 3. Animated Statistics Counter
- **Implementation**: Located in Section Tentang. The counter uses an **Intersection Observer** in `script.js` to begin counting from `0` to the target value (e.g. `1995`, `377`, `2`, `5`) exactly when the user scrolls the section into view. It runs an `easeOutQuad` math animation, making it look incredibly smooth.

### 4. Custom Vertical Timeline
- **Implementation**: A fully responsive timeline layout (within `#sejarah`) that shifts from alternating left-and-right cards (on Desktop/Laptop screens) to a single-column layout with left-aligned indicators (on Tablet/Mobile screens).

### 5. Interactive Cards & Hover Transitions
- **Implementation**: Cards in Section Jurusan, Pendiri, and Fasilitas have customized border-radius (`20px`), soft shadows (`box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04)`), and hover transitions (`transform: translateY(-8px)`).

### 6. Lightbox Modal Gallery
- **Implementation**: The masonry gallery handles clicks on any items by showing the Bootstrap Modal `galleryLightbox`. The modal reads the clicked target's data attribute (`data-src`) and updates the image source on-the-fly via JavaScript.

---

---

## Visual Verification Findings
The website has been thoroughly tested using an automated browser subagent. The results show that all elements render properly and function interactively.

A complete visual walkthrough with screenshots and the automated session video has been rendered directly in the chat interface.

---

## How to Run the Project
1. Since we have started a local PHP development server, you can view it immediately in your browser by visiting: **[http://localhost:8080](http://localhost:8080)**.
2. If you want to run the project manually or move it to a hosting environment:
   - Move/Upload the `/history-smkmuh2/` directory to your web server (e.g., Apache, XAMPP `htdocs`, Laragon `www`).
   - Open your web browser and navigate to `http://localhost/history-smkmuh2/index.php`.
3. To customize images in the future, simply replace the placeholder files in their respective folders under `assets/img/`:
   - Hero: `assets/img/hero/`
   - Jurusan: `assets/img/jurusan/`
   - Gallery: `assets/img/gallery/`
   - Founders: `assets/img/founder/`
   - Facilities: `assets/img/fasilitas/`

