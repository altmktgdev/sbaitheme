const fullWidthSlider = () => {
    document.addEventListener("DOMContentLoaded", function() {
        let fullWidthSlider = document.querySelector('.full-width-swiper');
        if (fullWidthSlider) {
            const swiper = new Swiper('.full-width-swiper', {
                direction: 'horizontal',
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay: {
                    delay: 6000, // Cambio cada 6 segundos
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });
        }
    });
}
export default fullWidthSlider;