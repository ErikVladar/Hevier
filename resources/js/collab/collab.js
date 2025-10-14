const modals = {
    hevier: document.getElementById("hevier-modal"),
    toth: document.getElementById("toth-modal"),
};

const body = document.body;

function openModal(modal) {
    modal.classList.remove("hidden");
    body.classList.add("overflow-hidden"); 
}

function closeAllModals() {
    Object.values(modals).forEach((modal) => {
        modal.classList.add("hidden");
        modal
            .querySelectorAll("iframe")
            .forEach((frame) => (frame.src = frame.src));
    });
    body.classList.remove("overflow-hidden"); 
}

document
    .getElementById("hevier-card")
    .addEventListener("click", () => openModal(modals.hevier));
document
    .getElementById("toth-card")
    .addEventListener("click", () => openModal(modals.toth));

document.querySelectorAll(".close-modal").forEach((btn) => {
    btn.addEventListener("click", closeAllModals);
});

Object.values(modals).forEach((modal) => {
    modal.addEventListener("click", (e) => {
        if (e.target === modal) closeAllModals();
    });
});
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
