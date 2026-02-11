/* ============================================
   MusaSoftTech - Main JavaScript
   ============================================ */

(function() {
    'use strict';

    // Navbar scroll effect
    var navbar = document.getElementById('mainNav');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Mobile navigation toggle
    var navToggle = document.getElementById('navToggle');
    var navMenu = document.getElementById('navMenu');
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('open');
            navToggle.classList.toggle('active');
        });

        // Close menu when clicking a link
        var navLinks = navMenu.querySelectorAll('.mst-nav-link');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                navMenu.classList.remove('open');
                navToggle.classList.remove('active');
            });
        });
    }

    // Active nav link on scroll
    var sections = document.querySelectorAll('section[id]');
    if (sections.length > 0) {
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY + 100;
            sections.forEach(function(section) {
                var sectionTop = section.offsetTop;
                var sectionHeight = section.offsetHeight;
                var sectionId = section.getAttribute('id');
                var navLink = document.querySelector('.mst-nav-link[href="#' + sectionId + '"]');
                if (navLink) {
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        document.querySelectorAll('.mst-nav-link').forEach(function(link) {
                            link.classList.remove('active');
                        });
                        navLink.classList.add('active');
                    }
                }
            });
        });
    }

    // Scroll animations
    var animatedElements = document.querySelectorAll('[data-animate]');
    if (animatedElements.length > 0) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        animatedElements.forEach(function(el) {
            observer.observe(el);
        });
    }

    // Contact form handling
    var contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var btn = contactForm.querySelector('button[type="submit"]');
            var originalText = btn.innerHTML;
            btn.innerHTML = 'Sending...';
            btn.disabled = true;

            // Simulate form submission
            setTimeout(function() {
                btn.innerHTML = 'Message Sent!';
                btn.style.background = '#10b981';
                btn.style.borderColor = '#10b981';
                contactForm.reset();

                setTimeout(function() {
                    btn.innerHTML = originalText;
                    btn.style.background = '';
                    btn.style.borderColor = '';
                    btn.disabled = false;
                }, 3000);
            }, 1500);
        });
    }

    // Hero Slideshow
    var slides = document.querySelectorAll('.mst-slide');
    var dots = document.querySelectorAll('.mst-slide-dot');
    var prevBtn = document.getElementById('slidePrev');
    var nextBtn = document.getElementById('slideNext');
    if (slides.length > 0) {
        var currentSlide = 0;
        var slideInterval;

        function goToSlide(index) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            currentSlide = (index + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function startAutoplay() {
            slideInterval = setInterval(function() {
                goToSlide(currentSlide + 1);
            }, 4000);
        }

        function resetAutoplay() {
            clearInterval(slideInterval);
            startAutoplay();
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                goToSlide(currentSlide - 1);
                resetAutoplay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                goToSlide(currentSlide + 1);
                resetAutoplay();
            });
        }

        dots.forEach(function(dot) {
            dot.addEventListener('click', function() {
                goToSlide(parseInt(this.getAttribute('data-index')));
                resetAutoplay();
            });
        });

        startAutoplay();
    }

    // Sidebar submenu toggle (for internal app pages)
    var sidebarToggles = document.querySelectorAll('.mst-sidebar-link[data-toggle="submenu"]');
    sidebarToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            var submenu = this.nextElementSibling;
            var icon = this.querySelector('.mst-sidebar-toggle-icon');
            if (submenu) {
                submenu.classList.toggle('open');
            }
            if (icon) {
                icon.classList.toggle('rotated');
            }
        });
    });

    // Mobile sidebar toggle (for internal app)
    var mobileMenuBtn = document.querySelector('.mst-mobile-menu-btn');
    var sidebar = document.querySelector('.mst-sidebar');
    var overlay = document.querySelector('.mst-overlay');
    if (mobileMenuBtn && sidebar) {
        mobileMenuBtn.addEventListener('click', function() {
            sidebar.classList.toggle('open');
            if (overlay) overlay.classList.toggle('active');
        });
        if (overlay) {
            overlay.addEventListener('click', function() {
                sidebar.classList.remove('open');
                overlay.classList.remove('active');
            });
        }
    }

})();
