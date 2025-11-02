import "./bootstrap";

import Alpine from "alpinejs";


// Import all JS modules using glob
const modules = import.meta.glob([
    "./welcome/welcome.js",
    "./about/about.js",
    "./collab/collab.js",
    "./more/more.js",
    "./stats/stats.js",
    "./partners/partners.js",
    "./gallery/gallery.js",
    "./slideshow.js"
]);

Object.values(modules).forEach(async (importModule) => {
    await importModule(); // actually load and execute it
});

const toggleBtn = document.getElementById('menu-toggle');
const menu = document.getElementById('desktop-menu');

toggleBtn.addEventListener('click', () => {
    const isHidden = menu.classList.contains('hidden');

    if (isHidden) {
        menu.classList.remove('hidden', 'max-h-0');
        menu.classList.add('max-h-[1000px]');
    } else {
        menu.classList.add('max-h-0');
        setTimeout(() => menu.classList.add('hidden'), 500); 
        menu.classList.remove('max-h-[1000px]');
    }
});


window.Alpine = Alpine;

Alpine.start();
