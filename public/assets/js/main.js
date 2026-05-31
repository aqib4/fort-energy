document.addEventListener('DOMContentLoaded', () => {
    // Burger menu and overlay
    const burger = document.getElementById('burger');
    const navLinks = document.getElementById('navLinks');
    const navOverlay = document.getElementById('navOverlay');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    if (burger && navLinks) {
        burger.addEventListener('click', (e) => {
            e.stopPropagation();
            const isOpen = navLinks.classList.toggle('open');
            if (navOverlay) {
                navOverlay.classList.toggle('active', isOpen);
            }
            burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }

    // Toggle dropdowns on button click
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            const parentLi = toggle.closest('.nav-item-dropdown');
            if (!parentLi) return;

            const isOpen = parentLi.classList.contains('open');

            // Close other dropdowns
            document.querySelectorAll('.nav-item-dropdown').forEach(li => {
                if (li !== parentLi) {
                    li.classList.remove('open');
                    const btn = li.querySelector('.dropdown-toggle');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle this dropdown
            parentLi.classList.toggle('open', !isOpen);
            toggle.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    // Close sidebar and dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        // 1. Close sidebar if open and clicked outside
        if (navLinks && navLinks.classList.contains('open')) {
            const clickedInsideSidebar = navLinks.contains(e.target);
            const clickedBurger = burger && burger.contains(e.target);
            if (!clickedInsideSidebar && !clickedBurger) {
                navLinks.classList.remove('open');
                if (navOverlay) {
                    navOverlay.classList.remove('active');
                }
                if (burger) {
                    burger.setAttribute('aria-expanded', 'false');
                }
            }
        }

        // 2. Close dropdowns if clicked outside any dropdown
        const clickedInsideDropdown = e.target.closest('.nav-item-dropdown');
        if (!clickedInsideDropdown) {
            document.querySelectorAll('.nav-item-dropdown').forEach(li => {
                li.classList.remove('open');
                const btn = li.querySelector('.dropdown-toggle');
                if (btn) btn.setAttribute('aria-expanded', 'false');
            });
        }
    });

    // Scroll reveal
    const reveals = document.querySelectorAll('.reveal');
    if (reveals.length > 0) {
        const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
            e.target.classList.add('visible');
            io.unobserve(e.target);
            }
        });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        reveals.forEach(r => io.observe(r));
    }

    // Stagger children of sector grid on scroll
    const sectorCards = document.querySelectorAll('.sector-card');
    if (sectorCards.length > 0) {
        const sectorObserver = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
            const cards = document.querySelectorAll('.sector-card');
            cards.forEach((card, i) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(16px)';
                card.style.transition = `opacity 0.5s ${i * 0.07}s, transform 0.5s ${i * 0.07}s`;
                requestAnimationFrame(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
                });
            });
            sectorObserver.disconnect();
            }
        });
        }, { threshold: 0.1 });
        sectorObserver.observe(sectorCards[0]);
    }
});
