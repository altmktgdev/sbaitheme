const sportBettingSolutiones = () => {
	document.addEventListener("DOMContentLoaded", function() {
		let sportBettingSolutiones = document.querySelector('.sport-betting-solutions'); 
		if (sportBettingSolutiones) {		
			const sportBettingSolutiones = new Swiper('.sport-betting-solutions', {
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
						let sliderContainers = document.querySelectorAll('.sport-betting-solutions-container');
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
export default sportBettingSolutiones
