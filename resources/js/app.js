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
]);

Object.values(modules).forEach(async (importModule) => {
    await importModule(); // actually load and execute it
});


window.Alpine = Alpine;

Alpine.start();
