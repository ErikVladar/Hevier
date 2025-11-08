import { gsap } from "gsap";

if (gsap) {
    console.log("Slideshow gsap loaded");
}

gsap.registerPlugin(ScrollTrigger);

let horizontalSections = gsap.utils.toArray(".slideshow-container");
horizontalSections.forEach((container) => {
    let sections = container.querySelectorAll(".slideshow-panel");
    console.log(sections);
    gsap.to(horizontalSections, {
        // ease: "none",
        scrollTrigger: {
            trigger: horizontalSections,
            scrub: 1,
            // base vertical scrolling on how wide the container is so it feels more natural.
        },
    });
});
