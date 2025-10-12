// Navbar mobile toggle
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(
        '[aria-controls="mobile-menu"]'
    );
    const mobileMenu = document.getElementById("mobile-menu");
    if (toggleButton && mobileMenu) {
        toggleButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    }
});

// Desktop menu animation
const toggleBtn = document.getElementById("menu-toggle");
const menu = document.getElementById("desktop-menu");
if (toggleBtn && menu) {
    toggleBtn.addEventListener("click", () => {
        const isHidden = menu.classList.contains("hidden");
        if (isHidden) {
            menu.classList.remove("hidden", "max-h-0");
            menu.classList.add("max-h-[1000px]");
        } else {
            menu.classList.add("max-h-0");
            setTimeout(() => menu.classList.add("hidden"), 500);
            menu.classList.remove("max-h-[1000px]");
        }
    });
}
document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.15,
        }
    );

    document
        .querySelectorAll(".animate-on-scroll")
        .forEach((el) => observer.observe(el));
});
