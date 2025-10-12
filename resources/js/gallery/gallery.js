window.gallerySlideshow = function (images) {
    return {
        open: false,
        slides: images.map((img, i) => ({
            image: img,
            title: `Fotka ${i + 1}`,
            text: "krátky opis",
        })),
        currentIndex: 0,
        get currentSlide() {
            return this.slides[this.currentIndex];
        },
        show(index) {
            this.currentIndex = index;
            this.open = true;
            document.body.classList.add("overflow-hidden");
        },
        close() {
            this.open = false;
            document.body.classList.remove("overflow-hidden");
        },
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.slides.length;
        },
        prev() {
            this.currentIndex =
                (this.currentIndex - 1 + this.slides.length) % this.slides.length;
        },
    };
};

document.addEventListener("DOMContentLoaded", () => {
    console.log("✅ gallery.js loaded");

    const toggleButton = document.querySelector('[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById("mobile-menu");

    if (toggleButton && mobileMenu) {
        toggleButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    }

    const scrollBtn = document.getElementById("scrollToTopBtn");
    if (scrollBtn) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                scrollBtn.classList.add("opacity-60");
                scrollBtn.classList.remove("opacity-0", "pointer-events-none");
            } else {
                scrollBtn.classList.add("opacity-0", "pointer-events-none");
                scrollBtn.classList.remove("opacity-60");
            }
        });

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

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
});
