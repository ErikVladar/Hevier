const modals = {
    hevier: document.getElementById("lara-modal"),
    toth: document.getElementById("peter-modal"),
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
    .getElementById("lara-card")
    .addEventListener("click", () => openModal(modals.hevier));
document
    .getElementById("peter-card")
    .addEventListener("click", () => openModal(modals.toth));

document.querySelectorAll(".close-modal").forEach((btn) => {
    btn.addEventListener("click", closeAllModals);
});

Object.values(modals).forEach((modal) => {
    modal.addEventListener("click", (e) => {
        if (e.target === modal) closeAllModals();
    });
});

AOS.init({
    duration: 500,
    once: true,
    easing: 'ease-in-out'
});