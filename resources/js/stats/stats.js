import Chart from "chart.js/auto";

// Define all charts
const charts = [
    {
        id: "activityChart",
        type: "bar",
        data: {
            labels: ["6–8 r.", "9–11 r.", "12–14 r.", "15–17 r."],
            datasets: [
                {
                    label: "Minút denne",
                    data: [75, 62, 48, 35],
                    backgroundColor: "rgba(37, 99, 235, 0.7)",
                },
            ],
        },
        options: {
            scales: { y: { beginAtZero: true } },
        },
    },
    {
        id: "screenTimeChart",
        type: "line",
        data: {
            labels: ["Po", "Ut", "St", "Št", "Pi", "So", "Ne"],
            datasets: [
                {
                    label: "Hodiny denne",
                    data: [2.5, 2.8, 3.0, 3.2, 3.5, 4.2, 4.0],
                    borderColor: "rgba(234, 88, 12, 0.9)",
                    tension: 0.3,
                },
            ],
        },
        options: {
            scales: { y: { beginAtZero: true } },
        },
    },
    {
        id: "pieChart",
        type: "pie",
        data: {
            labels: ["Spĺňajú odporúčanie", "Nespĺňajú"],
            datasets: [
                {
                    data: [1, 2],
                    backgroundColor: [
                        "rgba(34,197,94,0.8)",
                        "rgba(239,68,68,0.8)",
                    ],
                    borderWidth: 0,
                },
            ],
        },
        options: {
            plugins: { legend: { position: "bottom" } },
        },
    },
];

charts.forEach(({ id, ...cfg }) => {
    const el = document.getElementById(id);
    if (!el) return;
    new Chart(el, cfg);
});

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(
        '[aria-controls="mobile-menu"]'
    );
    const mobileMenu = document.getElementById("mobile-menu");

    toggleButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
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

scrollBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});