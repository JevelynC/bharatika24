<div class="gallery">
    <div class="gallery-container">
        <img class="gallery-item gallery-item-1" src="assets/img/carrousel/1.jpg" data-index="1">
        <img class="gallery-item gallery-item-2" src="assets/img/carrousel/2.jpg" data-index="2">
        <img class="gallery-item gallery-item-3" src="assets/img/carrousel/3.jpg" data-index="3">
        <img class="gallery-item gallery-item-4" src="assets/img/carrousel/4.jpg" data-index="4">
        <img class="gallery-item gallery-item-5" src="assets/img/carrousel/5.jpg" data-index="5">
        <img class="gallery-item gallery-item-6" src="assets/img/carrousel/6.jpg" data-index="6">
        <img class="gallery-item gallery-item-7" src="assets/img/carrousel/7.jpg" data-index="7">
        <img class="gallery-item gallery-item-8" src="assets/img/carrousel/8.jpg" data-index="8">
    </div>  
</div>

<script>
    const galleryContainer = document.querySelector('.gallery-container');
    const galleryItems = document.querySelectorAll('.gallery-item');
    let currentIndex = 0;
    let autoplayInterval = null;

    class Carousel {
        constructor(container, items) {
            this.carouselContainer = container;
            this.carouselArray = [...items];
        }

        updateGallery() {
            this.carouselArray.forEach(el => {
                el.classList.remove('gallery-item-1', 'gallery-item-2', 'gallery-item-3', 'gallery-item-4', 'gallery-item-5');
            });

            this.carouselArray.slice(0, 5).forEach((el, i) => {
                el.classList.add(`gallery-item-${i + 1}`);
            });
        }

        setCurrentState() {
            this.carouselArray.unshift(this.carouselArray.pop());
            this.updateGallery();
        }

        startAutoplay() {
            autoplayInterval = setInterval(() => {
                this.setCurrentState();
            }, 3000); // Ubah angka 3000 sesuai dengan kecepatan yang diinginkan (dalam milidetik)
        }

        stopAutoplay() {
            clearInterval(autoplayInterval);
        }
    }

    const exampleCarousel = new Carousel(galleryContainer, galleryItems);

    exampleCarousel.updateGallery();
    exampleCarousel.startAutoplay();
</script>