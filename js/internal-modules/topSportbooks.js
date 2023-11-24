const topSportbooks = () => {
	document.addEventListener("DOMContentLoaded", function() {
		let topSportbooks = document.querySelector('.top-sportbooks'); 
		if (topSportbooks) {		
			const topSportbooks = new Swiper('.top-sportbooks', {
				// Optional parameters
				direction: 'horizontal',
				loop: false,
				allowThresholdMove: true,
				slidesPerView: 'auto',
				spaceBetween: 0,
				spaceBetween: 15,
				// Add init event
				on: {
					init: function () {
						// Select all slider containers and iterate over them
						let sliderContainers = document.querySelectorAll('.top-sportbooks-container');
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
export default topSportbooks
