const midSizeSlider = () => { 
	document.addEventListener("DOMContentLoaded", function() {
		let midSizeSlider = document.querySelector('.mid-size-slider'); 
		if (midSizeSlider) {      
			const midSizeSlider = new Swiper('.mid-size-slider', {
				// Optional parameters
				direction: 'horizontal',
				loop: false,
				allowThresholdMove: true,
				slidesPerView: 'auto',
				spaceBetween: 7,
				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				breakpoints: {
					320:  {},
					481:  {},
					640:  {},
					768:  {},
					960:  {},
					1024: {},
					1200: {},
					1440: {},
					1600: {},
					1900: {}
				}
			});
		}	
		let midSizeSliders = document.querySelectorAll('.mid-size-slider-section');
			if (midSizeSliders) {
				midSizeSliders.forEach(function(slider) {
				slider.style.display = 'block';
			});
		}
	});	
}
export default midSizeSlider
