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

const ratio = 1040 / 650; // aspect ratio

const maxWidth = window.innerWidth * 0.9;
const maxHeight = window.innerHeight * 0.9;

let width = maxWidth;
let height = width / ratio;

// if height would exceed 90vh, cap by height instead
if (height > maxHeight) {
    height = maxHeight;
    width = height * ratio;
}

$("#flipbook").turn({
    width: width,
    height: height,
    autoCenter: true,
});

const cover = document.getElementById("book-cover");
const modal = document.getElementById("book-modal");
const closeBtn = document.getElementById("close-book");

// Open modal
cover.addEventListener("click", () => {
    modal.classList.remove("hidden");
    modal.classList.add("flex", "opacity-100");
    document.body.style.overflow = "hidden";
});

// Close modal
closeBtn.addEventListener("click", () => {
    modal.classList.remove("opacity-100");
    setTimeout(() => {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
        document.body.style.overflow = "auto";
    }, 300);
});

// Close on Escape key
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modal.classList.contains("hidden")) {
        closeBtn.click();
    }
});

const toggleBtn = document.getElementById("menu-toggle");
const menu = document.getElementById("desktop-menu");

toggleBtn.addEventListener("click", () => {
    const isHidden = menu.classList.contains("hidden");

    if (isHidden) {
        // Show
        menu.classList.remove("hidden", "max-h-0");
        menu.classList.add("max-h-[1000px]");
    } else {
        // Hide
        menu.classList.add("max-h-0");
        setTimeout(() => menu.classList.add("hidden"), 500); // match duration
        menu.classList.remove("max-h-[1000px]");
    }
});
