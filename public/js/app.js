document.addEventListener('DOMContentLoaded', function() {
    // 1. Inisialisasi AOS (Animate On Scroll)
    AOS.init({ duration: 800, once: true, offset: 50 });

    // 2. Efek 'scrolled' pada Navbar
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 3. Animasi Counter
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            counter.innerText = '0'; // Reset ke 0
            const updateCount = () => {
                const count = +counter.innerText;
                const speed = 200;
                const inc = Math.ceil(target / speed);

                if (count < target) {
                    counter.innerText = Math.min(count + inc, target);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    }

    const aboutSection = document.querySelector('#about');
    const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            animateCounters();
            observer.disconnect(); // Hentikan observasi setelah animasi berjalan sekali
        }
    }, { threshold: 0.4 });

    if (aboutSection) {
        observer.observe(aboutSection);
    }

    // 4. Update tahun di footer secara dinamis
    document.getElementById('year').textContent = new Date().getFullYear();

    // 5. Smooth scroll & Active link indicator
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    // Fungsi untuk smooth scroll
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.hash !== "") {
                e.preventDefault();
                const hash = this.hash;
                const targetElement = document.querySelector(hash);
                if(targetElement) {
                     window.scrollTo({
                        top: targetElement.offsetTop - 70, // offset untuk fixed navbar
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Fungsi untuk update active link saat scroll
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 80) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });
});
