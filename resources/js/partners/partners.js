AOS.init({
    duration: 1000,
    once: true,
    easing: "ease-in-out",
});
const scrollBtn = document.getElementById("scrollToTopBtn");
window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        scrollBtn.classList.add("opacity-60");
        scrollBtn.classList.remove("opacity-0", "pointer-events-none");
    } else {
        scrollBtn.classList.add("opacity-0", "pointer-events-none");
        scrollBtn.classList.remove("opacity-60");
    }
});
scrollBtn.addEventListener("click", () =>
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    })
);
