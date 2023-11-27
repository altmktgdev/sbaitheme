const accordion = () => {
	document.addEventListener("DOMContentLoaded", function() {
		// Selecciona todos los botones de acordeón
		const accordionButtons = document.querySelectorAll('.accordion-container__btn-acc');
		// Verifica si hay botones de acordeón en la página
		if (accordionButtons.length > 0) {
			// Añade un evento de clic a cada botón
			accordionButtons.forEach(button => {
				button.addEventListener('click', function() {
					// Alterna la clase 'active' en el botón clickeado
					this.classList.toggle('active');
					// Obtiene el panel asociado al botón y alterna su clase 'active'
					const panel = this.nextElementSibling;
					if (panel) {
						panel.classList.toggle('active');
					}
				});
			});
		}
	});
};

export default accordion;
