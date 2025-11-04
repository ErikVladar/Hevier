// document.addEventListener('alpine:init', () => {
//     Alpine.data('gallery', (imgPath) => ({
//         images: [],
//         currentIndex: 0,

//         init() {
//             if (!/\.(jpg|jpeg|png|webp)$/i.test(imgPath)) {
//                 fetch(`/gallery-images?folder=${encodeURIComponent(imgPath)}`)
//                     .then(res => res.json())
//                     .then(data => {
//                         this.images = data.length ? data.map(f => '/' + f) : [];
//                     })
//                     .catch(console.error);
//             } else {
//                 this.images = ['/' + imgPath];
//             }
//         },

//         next() {
//             if (!this.images.length) return;
//             this.currentIndex = (this.currentIndex + 1) % this.images.length;
//         },

//         prev() {
//             if (!this.images.length) return;
//             this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
//         },

//         async upload(event) {
//             const file = event.target.files[0];
//             if (!file) return;
//             console.log('🚀 upload triggered');

//             const formData = new FormData();
//             formData.append('file', file);
//             formData.append('folder', imgPath);

//             const res = await fetch('/gallery/upload', {
//                 method: 'POST',
//                 headers: {
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
//                 },
//                 body: formData
//             });

//             if (res.ok) {
//                 this.init(); // reload gallery
//             } else {
//                 console.error('Upload failed', res.status);
//             }
//         },

//         async deleteCurrent() {
//             if (!this.images.length) return;
//             const imageToDelete = this.images[this.currentIndex];
//             console.log('🗑 delete triggered', imageToDelete);

//             const res = await fetch('/gallery/delete', {
//                 method: 'DELETE',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
//                 },
//                 body: JSON.stringify({ image: imageToDelete })
//             });

//             if (res.ok) {
//                 this.init(); // reload gallery
//             } else {
//                 console.error('Delete failed', res.status);
//             }
//         }
//     }));
// });
