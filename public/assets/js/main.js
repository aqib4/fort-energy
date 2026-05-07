document.addEventListener('DOMContentLoaded', () => {
    // Burger menu
    const burger = document.getElementById('burger');
    const navLinks = document.getElementById('navLinks');
    if (burger && navLinks) {
        burger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
        });
    }

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
