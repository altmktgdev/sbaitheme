const mainSlider = () => {
    document.addEventListener("DOMContentLoaded", function() {
        let mainSliderElement = document.querySelector('.main-slider'); 
        if (mainSliderElement) {
            // Calcular el índice del último slide
            let lastIndex = mainSliderElement.querySelectorAll('.swiper-slide').length - 1;

            const mainSliderInstance = new Swiper('.main-slider', {
                // Optional parameters                
                speed: 800,
                autoHeight: true,    
                spaceBetween: 30,    
                centeredSlides: true,    
                slidesPerView: "auto",    
                loop: true,
                initialSlide: lastIndex, // Establecer el último slide como el inicial
                pagination: {
                    el: ".swiper-pagination",
                    // type: "progressbar"
                    clickable: true,
                    // dynamicBullets: true
                },
                // Navigation arrows
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },                
                // Add init event
                on: {
                    init: function () {
                        // Select all slider containers and iterate over them
                        let sliderContainers = document.querySelectorAll('.main-slider-container');
                        sliderContainers.forEach(function(sliderContainer) {
                            // Add 'display: block !important' directly to each container
                            sliderContainer.style.cssText = "display: block !important;";
                        });
                    },
                },            
                
            });
        }
    });
}
export default mainSlider;
