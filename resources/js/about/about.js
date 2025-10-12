document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    document.querySelectorAll(".animate-on-scroll").forEach(el => observer.observe(el));
});

const toggleBtn = document.getElementById('menu-toggle');
const menu = document.getElementById('desktop-menu');

toggleBtn.addEventListener('click', () => {
    const isHidden = menu.classList.contains('hidden');

    if (isHidden) {
        // Show
        menu.classList.remove('hidden', 'max-h-0');
        menu.classList.add('max-h-[1000px]');
    } else {
        // Hide
        menu.classList.add('max-h-0');
        setTimeout(() => menu.classList.add('hidden'), 500); // match duration
        menu.classList.remove('max-h-[1000px]');
    }
});