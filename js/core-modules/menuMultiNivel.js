const menuMultiNivel = () => {
    // Selecciona todos los elementos LI del menú multinivel
    const listItems = document.querySelectorAll('.main-menu__li');
    listItems.forEach(li => {
        const anchor = li.querySelector('.main-menu__anchor');
        const subMenu = li.querySelector('.main-menu__sub-menu-first-level');
        // Solo añade la funcionalidad de tabulación a los anchors que tienen un submenú
        if (subMenu && anchor) {
            anchor.addEventListener('click', event => {
                event.preventDefault();
                const isActive = subMenu.classList.contains('active');
                document.querySelectorAll('.main-menu__sub-menu-first-level').forEach(menu => {
                    menu.classList.remove('active');
                });
                document.body.classList.remove('body-overflow');

                if (!isActive) {
                    subMenu.classList.add('active');
                    document.body.classList.add('body-overflow');
                }
            });
            // Añade la clase arrow-sub-menu al anchor si hay un submenú
            anchor.classList.add('arrow-sub-menu');
        }
    });
    // Funcionalidad del botón de hamburguesa
    const hamburger = document.querySelector('.top-social-menu__hamburger');
    if (hamburger) {
        hamburger.addEventListener('click', () => {
            const topWidget = document.querySelector('.top-widget');
            const mainHeader = document.querySelector('.main-header');
            const mainHeaderContainer = document.querySelector('.main-header__container');
            const mainMenu = document.querySelector('.main-menu');
			 // Cambia la visibilidad de las imágenes
			const hamburgerOpenImage = document.querySelector('.top-social-menu__hamburger-open');
			const hamburgerCloseImage = document.querySelector('.top-social-menu__hamburger-close');
			// Aquí se elimina la clase 'mb-body-overflow' y 'body-overflow' del body
			document.body.classList.remove('body-overflow');
			if (hamburgerOpenImage && hamburgerCloseImage) {
				if (hamburgerOpenImage.style.display !== 'none') {
					hamburgerOpenImage.style.display = 'none';
					hamburgerCloseImage.style.display = 'block';
				} else {
					hamburgerOpenImage.style.display = 'block';
					hamburgerCloseImage.style.display = 'none';
				}
			}
            if (topWidget && mainHeader && mainHeaderContainer && mainMenu) {
                topWidget.classList.toggle('top-widget-hidden');
                mainHeader.classList.toggle('main-header-mb-height-adjusted');
                mainHeaderContainer.classList.toggle('main-header-mb-height-adjusted');
                mainMenu.classList.toggle('main-menu-mb-height');
            } else {
                console.error('Uno o más elementos necesarios no se encontraron.');
            }
            // Aquí comienza la lógica existente para el botón de hamburguesa
            const menuMultiNivelElement = mainMenu; // Si es el mismo elemento, reutiliza la variable
            const blurryOverlapElement = document.querySelector('.blurry-overlap');            
            if (menuMultiNivelElement) {
                menuMultiNivelElement.classList.toggle('active');
                blurryOverlapElement.classList.toggle('active');
                document.body.classList.toggle('mb-body-overflow');
            } else {
                console.error('El menú multinivel no se encontró.');
            }
        });
    } else {
        console.error('El botón de hamburguesa no se encontró.');
    }
    // Agrega evento click a elementos para volver atrás en el menú multinivel
    document.querySelectorAll('.main-menu__mb-back').forEach(backButton => {
        backButton.addEventListener('click', () => {
            const subMenu = backButton.closest('.main-menu__sub-menu-first-level');
            if (subMenu) {
                subMenu.classList.remove('active');
            } else {
                console.error('El elemento de retorno no se encuentra dentro de un submenú.');
            }
        });
    });
    const pushMenuListItems = document.querySelectorAll('.push-menu__li');
    pushMenuListItems.forEach(li => {
        const anchor = li.querySelector('.push-menu__anchor');
        const subMenuContainer = li.querySelector('.push-menu__sub-menu-container');
        if (subMenuContainer && anchor) {
            anchor.classList.add('arrow-sub-menu');
			anchor.addEventListener('click', (event) => {
				event.preventDefault();
			});
        }
    });
	// Agrega funcionalidad de clic a .push-menu__anchor
	const pushMenuAnchors = document.querySelectorAll('.push-menu__anchor');
	pushMenuAnchors.forEach(anchor => {
		anchor.addEventListener('click', (event) => {
			
			// El resto de la lógica para los elementos .push-menu__anchor
			const subMenuContainer = anchor.nextElementSibling;
			if (subMenuContainer && subMenuContainer.classList.contains('push-menu__sub-menu-container')) {
				subMenuContainer.classList.toggle('active');
				subMenuContainer.scrollIntoView();
				const pushMenu = anchor.closest('.push-menu');
				if (pushMenu) {
					pushMenu.style.top = pushMenu.style.top === '-40px' ? '0px' : '-40px';
				}
			}
		});
	});
	// Agrega evento click a elementos 'main-menu__mb-back-push'
	document.querySelectorAll('.main-menu__mb-back-push').forEach(backButton => {
		backButton.addEventListener('click', () => {
			const subMenuContainer = backButton.closest('.push-menu__sub-menu-container');
			if (subMenuContainer) {
				subMenuContainer.classList.remove('active');
				// Encuentra el elemento ul .push-menu más cercano y cambia su estilo
				const pushMenu = backButton.closest('.push-menu');
				if (pushMenu) {
					pushMenu.style.top = '0px'; // Restablece el estilo top a 0
				}
			}
		});
	});
	// Funcionalidad para el elemento .blurry-overlap
	const blurryOverlap = document.querySelector('.blurry-overlap');
	if (blurryOverlap) {
		blurryOverlap.addEventListener('click', () => {
			// 1. Cambiar la visibilidad de los elementos del menú hamburguesa
			const hamburgerOpenImage = document.querySelector('.top-social-menu__hamburger-open');
			const hamburgerCloseImage = document.querySelector('.top-social-menu__hamburger-close');
			if (hamburgerOpenImage && hamburgerCloseImage) {
				hamburgerOpenImage.style.display = 'block';
				hamburgerCloseImage.style.display = 'none';
			}
			// 2. Quitar las clases .mb-body-overflow y .body-overflow del body
			document.body.classList.remove('mb-body-overflow');
			document.body.classList.remove('body-overflow');
			// 3. Remover la clase active del elemento main menu
			const mainMenu = document.querySelector('.main-menu');
			if (mainMenu) {
				mainMenu.classList.remove('active');
				mainMenu.classList.toggle('main-menu-mb-height');
			}
			// 4. Alternar la clase 'active' en el propio .blurry-overlap
			blurryOverlap.classList.toggle('active');
			// 1. Alternar la clase en main-header
			const mainHeader = document.querySelector('.main-header');
			if (mainHeader) {
				mainHeader.classList.toggle('main-header-mb-height-adjusted');
			}
			// 2. Alternar la clase en main-header__container
			const mainHeaderContainer = document.querySelector('.main-header__container');
			if (mainHeaderContainer) {
				mainHeaderContainer.classList.toggle('main-header-mb-height-adjusted');
			}
			// 3. Alternar la clase en top-widget
			const topWidget = document.querySelector('.top-widget');
			if (topWidget) {
				topWidget.classList.toggle('top-widget-hidden');
			}
		});
	} else {
		console.error('El elemento .blurry-overlap no se encontró.');
	}

	
	// Selecciona el botón que abre la búsqueda
	const openSearchButton = document.querySelector('.open-top-search');

	// Selecciona el botón que cierra la búsqueda
	const closeSearchButton = document.querySelector('.close-top-search');

	// Selecciona el contenedor de búsqueda
	const searchContainer = document.querySelector('.top-nav__search');

	// Verifica que el botón de abrir exista
	if (openSearchButton && searchContainer) {
		openSearchButton.addEventListener('click', () => {
			// Alterna la clase 'active' en el contenedor de búsqueda
			searchContainer.classList.toggle('active');
		});
	} else {
		console.error('El botón para abrir la búsqueda o el contenedor de búsqueda no se encontraron.');
	}

	// Verifica que el botón de cerrar exista
	if (closeSearchButton && searchContainer) {
		closeSearchButton.addEventListener('click', () => {
			// Remueve la clase 'active' del contenedor de búsqueda
			searchContainer.classList.remove('active');
		});
	} else {
		console.error('El botón para cerrar la búsqueda o el contenedor de búsqueda no se encontraron.');
	}

	
	
};
export default menuMultiNivel;
