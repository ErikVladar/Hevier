function galleryLightbox(images = []) {
    return {
        images: images || [],
        isOpen: false,
        currentIndex: 0,
        caption: null,

        init() {
            // optional: sanitize / ensure string URLs
            this.images = this.images.map((i) => String(i));
        },

        open(idx = 0) {
            this.currentIndex = idx;
            this.isOpen = true;
            this.preloadNeighbor();
            // prevent background scroll
            document.documentElement.style.overflow = "hidden";
        },

        close() {
            this.isOpen = false;
            // restore scroll
            document.documentElement.style.overflow = "";
        },

        next() {
            if (!this.images.length) return;
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
            this.preloadNeighbor();
        },

        prev() {
            if (!this.images.length) return;
            this.currentIndex =
                (this.currentIndex - 1 + this.images.length) %
                this.images.length;
            this.preloadNeighbor();
        },

        get currentImage() {
            return this.images[this.currentIndex];
        },

        preloadNeighbor() {
            // quick preload prev/next for smooth experience
            const nextIdx = (this.currentIndex + 1) % this.images.length;
            const prevIdx =
                (this.currentIndex - 1 + this.images.length) %
                this.images.length;
            [nextIdx, prevIdx].forEach((i) => {
                const img = new Image();
                img.src = this.images[i];
            });
        },
    };
}
