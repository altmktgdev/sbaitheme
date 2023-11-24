/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ([
/* 0 */,
/* 1 */
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
var mainSlider = function mainSlider() {
  document.addEventListener("DOMContentLoaded", function () {
    var mainSliderElement = document.querySelector('.main-slider');
    if (mainSliderElement) {
      // Calcular el índice del último slide
      var lastIndex = mainSliderElement.querySelectorAll('.swiper-slide').length - 1;
      var mainSliderInstance = new Swiper('.main-slider', {
        // Optional parameters                
        speed: 800,
        autoHeight: true,
        spaceBetween: 30,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        initialSlide: lastIndex,
        // Establecer el último slide como el inicial
        pagination: {
          el: ".swiper-pagination",
          // type: "progressbar"
          clickable: true
          // dynamicBullets: true
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        // Add init event
        on: {
          init: function init() {
            // Select all slider containers and iterate over them
            var sliderContainers = document.querySelectorAll('.main-slider-container');
            sliderContainers.forEach(function (sliderContainer) {
              // Add 'display: block !important' directly to each container
              sliderContainer.style.cssText = "display: block !important;";
            });
          }
        }
      });
    }
  });
};
/* harmony default export */ __webpack_exports__["default"] = (mainSlider);

/***/ }),
/* 2 */
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
var menuMultiNivel = function menuMultiNivel() {
  // Selecciona todos los elementos LI del menú multinivel
  var listItems = document.querySelectorAll('.main-menu__li');
  listItems.forEach(function (li) {
    var anchor = li.querySelector('.main-menu__anchor');
    var subMenu = li.querySelector('.main-menu__sub-menu-first-level');
    // Solo añade la funcionalidad de tabulación a los anchors que tienen un submenú
    if (subMenu && anchor) {
      anchor.addEventListener('click', function (event) {
        event.preventDefault();
        var isActive = subMenu.classList.contains('active');
        document.querySelectorAll('.main-menu__sub-menu-first-level').forEach(function (menu) {
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
  var hamburger = document.querySelector('.top-social-menu__hamburger');
  if (hamburger) {
    hamburger.addEventListener('click', function () {
      var topWidget = document.querySelector('.top-widget');
      var mainHeader = document.querySelector('.main-header');
      var mainHeaderContainer = document.querySelector('.main-header__container');
      var mainMenu = document.querySelector('.main-menu');
      // Cambia la visibilidad de las imágenes
      var hamburgerOpenImage = document.querySelector('.top-social-menu__hamburger-open');
      var hamburgerCloseImage = document.querySelector('.top-social-menu__hamburger-close');
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
      var menuMultiNivelElement = mainMenu; // Si es el mismo elemento, reutiliza la variable
      var blurryOverlapElement = document.querySelector('.blurry-overlap');
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
  document.querySelectorAll('.main-menu__mb-back').forEach(function (backButton) {
    backButton.addEventListener('click', function () {
      var subMenu = backButton.closest('.main-menu__sub-menu-first-level');
      if (subMenu) {
        subMenu.classList.remove('active');
      } else {
        console.error('El elemento de retorno no se encuentra dentro de un submenú.');
      }
    });
  });
  var pushMenuListItems = document.querySelectorAll('.push-menu__li');
  pushMenuListItems.forEach(function (li) {
    var anchor = li.querySelector('.push-menu__anchor');
    var subMenuContainer = li.querySelector('.push-menu__sub-menu-container');
    if (subMenuContainer && anchor) {
      anchor.classList.add('arrow-sub-menu');
      anchor.addEventListener('click', function (event) {
        event.preventDefault();
      });
    }
  });
  // Agrega funcionalidad de clic a .push-menu__anchor
  var pushMenuAnchors = document.querySelectorAll('.push-menu__anchor');
  pushMenuAnchors.forEach(function (anchor) {
    anchor.addEventListener('click', function (event) {
      // El resto de la lógica para los elementos .push-menu__anchor
      var subMenuContainer = anchor.nextElementSibling;
      if (subMenuContainer && subMenuContainer.classList.contains('push-menu__sub-menu-container')) {
        subMenuContainer.classList.toggle('active');
        subMenuContainer.scrollIntoView();
        var pushMenu = anchor.closest('.push-menu');
        if (pushMenu) {
          pushMenu.style.top = pushMenu.style.top === '-40px' ? '0px' : '-40px';
        }
      }
    });
  });
  // Agrega evento click a elementos 'main-menu__mb-back-push'
  document.querySelectorAll('.main-menu__mb-back-push').forEach(function (backButton) {
    backButton.addEventListener('click', function () {
      var subMenuContainer = backButton.closest('.push-menu__sub-menu-container');
      if (subMenuContainer) {
        subMenuContainer.classList.remove('active');
        // Encuentra el elemento ul .push-menu más cercano y cambia su estilo
        var pushMenu = backButton.closest('.push-menu');
        if (pushMenu) {
          pushMenu.style.top = '0px'; // Restablece el estilo top a 0
        }
      }
    });
  });
  // Funcionalidad para el elemento .blurry-overlap
  var blurryOverlap = document.querySelector('.blurry-overlap');
  if (blurryOverlap) {
    blurryOverlap.addEventListener('click', function () {
      // 1. Cambiar la visibilidad de los elementos del menú hamburguesa
      var hamburgerOpenImage = document.querySelector('.top-social-menu__hamburger-open');
      var hamburgerCloseImage = document.querySelector('.top-social-menu__hamburger-close');
      if (hamburgerOpenImage && hamburgerCloseImage) {
        hamburgerOpenImage.style.display = 'block';
        hamburgerCloseImage.style.display = 'none';
      }
      // 2. Quitar las clases .mb-body-overflow y .body-overflow del body
      document.body.classList.remove('mb-body-overflow');
      document.body.classList.remove('body-overflow');
      // 3. Remover la clase active del elemento main menu
      var mainMenu = document.querySelector('.main-menu');
      if (mainMenu) {
        mainMenu.classList.remove('active');
        mainMenu.classList.toggle('main-menu-mb-height');
      }
      // 4. Alternar la clase 'active' en el propio .blurry-overlap
      blurryOverlap.classList.toggle('active');
      // 1. Alternar la clase en main-header
      var mainHeader = document.querySelector('.main-header');
      if (mainHeader) {
        mainHeader.classList.toggle('main-header-mb-height-adjusted');
      }
      // 2. Alternar la clase en main-header__container
      var mainHeaderContainer = document.querySelector('.main-header__container');
      if (mainHeaderContainer) {
        mainHeaderContainer.classList.toggle('main-header-mb-height-adjusted');
      }
      // 3. Alternar la clase en top-widget
      var topWidget = document.querySelector('.top-widget');
      if (topWidget) {
        topWidget.classList.toggle('top-widget-hidden');
      }
    });
  } else {
    console.error('El elemento .blurry-overlap no se encontró.');
  }

  // Selecciona el botón que abre la búsqueda
  var openSearchButton = document.querySelector('.open-top-search');

  // Selecciona el botón que cierra la búsqueda
  var closeSearchButton = document.querySelector('.close-top-search');

  // Selecciona el contenedor de búsqueda
  var searchContainer = document.querySelector('.top-nav__search');

  // Verifica que el botón de abrir exista
  if (openSearchButton && searchContainer) {
    openSearchButton.addEventListener('click', function () {
      // Alterna la clase 'active' en el contenedor de búsqueda
      searchContainer.classList.toggle('active');
    });
  } else {
    console.error('El botón para abrir la búsqueda o el contenedor de búsqueda no se encontraron.');
  }

  // Verifica que el botón de cerrar exista
  if (closeSearchButton && searchContainer) {
    closeSearchButton.addEventListener('click', function () {
      // Remueve la clase 'active' del contenedor de búsqueda
      searchContainer.classList.remove('active');
    });
  } else {
    console.error('El botón para cerrar la búsqueda o el contenedor de búsqueda no se encontraron.');
  }
};
/* harmony default export */ __webpack_exports__["default"] = (menuMultiNivel);

/***/ }),
/* 3 */
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
var midSizeSlider = function midSizeSlider() {
  document.addEventListener("DOMContentLoaded", function () {
    var midSizeSlider = document.querySelector('.mid-size-slider');
    if (midSizeSlider) {
      var _midSizeSlider = new Swiper('.mid-size-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        allowThresholdMove: true,
        slidesPerView: 'auto',
        spaceBetween: 7,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      });
    }
    var midSizeSliders = document.querySelectorAll('.mid-size-slider-section');
    if (midSizeSliders) {
      midSizeSliders.forEach(function (slider) {
        slider.style.display = 'block';
      });
    }
  });
};
/* harmony default export */ __webpack_exports__["default"] = (midSizeSlider);

/***/ })
/******/ 	]);
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _internal_modules_mainSlider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1);
/* harmony import */ var _core_modules_menuMultiNivel__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(2);
/* harmony import */ var _internal_modules_midSizeSlider__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(3);
;



(function () {
  // To avoid conflicts with jQuery versions between WordPress and its plugins 
  $ = jQuery.noConflict();
  (0,_core_modules_menuMultiNivel__WEBPACK_IMPORTED_MODULE_1__["default"])();
  (0,_internal_modules_mainSlider__WEBPACK_IMPORTED_MODULE_0__["default"])();
  (0,_internal_modules_midSizeSlider__WEBPACK_IMPORTED_MODULE_2__["default"])();
})();
}();
/******/ })()
;
//# sourceMappingURL=theme-scripts.js.map