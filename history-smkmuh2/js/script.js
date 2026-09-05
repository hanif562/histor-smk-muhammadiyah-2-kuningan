/*
=================================================
JAVASCRIPT LOGIC FOR SMK MUHAMMADIYAH 2 KUNINGAN
Designed by Senior UI/UX & Full Stack Developer
=================================================
*/

document.addEventListener('DOMContentLoaded', function () {
  
  // 1. Sticky Navbar Transition on Scroll
  const navbar = document.querySelector('.navbar-custom');
  
  function handleScroll() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }
  
  // Initial check in case page starts scrolled down
  handleScroll();
  window.addEventListener('scroll', handleScroll);

  // 2. Animated Counter with Intersection Observer
  const counterSection = document.querySelector('#tentang');
  const counters = document.querySelectorAll('.counter-number');
  let countTriggered = false;

  const countUp = (counter) => {
    const target = parseInt(counter.getAttribute('data-target'));
    const duration = 2000; // Animation duration in ms
    const startTime = performance.now();

    const updateCount = (currentTime) => {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      
      // Easing function (easeOutQuad)
      const easeProgress = progress * (2 - progress);
      const currentVal = Math.floor(easeProgress * target);

      counter.textContent = currentVal;

      if (progress < 1) {
        requestAnimationFrame(updateCount);
      } else {
        counter.textContent = target; // Ensure it ends exactly at target
      }
    };

    requestAnimationFrame(updateCount);
  };

  const observerOptions = {
    root: null,
    threshold: 0.3 // Trigger when 30% of the section is visible
  };

  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !countTriggered) {
        counters.forEach(counter => countUp(counter));
        countTriggered = true; // Run only once
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  if (counterSection && counters.length > 0) {
    counterObserver.observe(counterSection);
  }

  // 3. Gallery Lightbox Modal Handling
  const galleryModal = document.getElementById('galleryLightbox');
  if (galleryModal) {
    const lightboxImage = galleryModal.querySelector('.lightbox-img');
    
    // Listen for modal show event
    galleryModal.addEventListener('show.bs.modal', function (event) {
      const triggerElement = event.relatedTarget; // The image wrapper clicked
      const imgSrc = triggerElement.getAttribute('data-src'); // Read the real image source
      
      // Set the image src in the modal
      if (imgSrc) {
        lightboxImage.setAttribute('src', imgSrc);
      }
    });

    // Clear src when closed to avoid showing old image momentarily when reopened
    galleryModal.addEventListener('hidden.bs.modal', function () {
      lightboxImage.setAttribute('src', '');
    });
  }

  // 4. Initialize AOS (Animate On Scroll)
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 1000,
      easing: 'ease-out-cubic',
      once: true,
      offset: 120
    });
  }

  // 5. Active Link Highlighting (Smooth ScrollSpy Adjustment)
  const navLinks = document.querySelectorAll('.navbar-custom .nav-link');
  const sections = document.querySelectorAll('section');

  function activeMenu() {
    let len = sections.length;
    while(--len && window.scrollY + 150 < sections[len].offsetTop) {}
    navLinks.forEach(lt => lt.classList.remove('active'));
    
    // Special check for hero/carousel (Beranda) when at top
    if (window.scrollY < 200) {
      const berandaLink = document.querySelector('.navbar-custom .nav-link[href="#beranda"]');
      if (berandaLink) berandaLink.classList.add('active');
      return;
    }

    if (sections[len]) {
      const id = sections[len].getAttribute('id');
      const activeLink = document.querySelector(`.navbar-custom .nav-link[href="#${id}"]`);
      if (activeLink) {
        activeLink.classList.add('active');
      }
    }
  }

  activeMenu();
  window.addEventListener('scroll', activeMenu);

  // 6. Close mobile menu on nav link click (for better mobile UX)
  const navbarCollapse = document.querySelector('.navbar-collapse');
  const bsCollapse = navbarCollapse ? new bootstrap.Collapse(navbarCollapse, {toggle: false}) : null;
  
  if (navbarCollapse && bsCollapse) {
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (navbarCollapse.classList.contains('show')) {
          bsCollapse.hide();
        }
      });
    });
  }

});
