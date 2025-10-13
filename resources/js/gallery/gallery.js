// function galleryComponent(items) {
//     return {
//         items,
//         isOpen: false,
//         activeIndex: 0,
//         get active() { return this.items[this.activeIndex] },

//         open(index) { this.activeIndex = index; this.isOpen = true },
//         close() { this.isOpen = false },
//         next() { this.activeIndex = (this.activeIndex + 1) % this.items.length },
//         prev() { this.activeIndex = (this.activeIndex - 1 + this.items.length) % this.items.length },
//     }
// }