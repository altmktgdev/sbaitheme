!function(){"use strict";var e=[,function(e,t,o){o.r(t);t.default=function(){document.querySelectorAll(".main-menu__li").forEach((function(e){var t=e.querySelector(".main-menu__anchor"),o=e.querySelector(".main-menu__sub-menu-first-level");o&&t&&(t.addEventListener("click",(function(e){e.preventDefault();var t=o.classList.contains("active");document.querySelectorAll(".main-menu__sub-menu-first-level").forEach((function(e){e.classList.remove("active")})),document.body.classList.remove("body-overflow"),t||(o.classList.add("active"),document.body.classList.add("body-overflow"))})),t.classList.add("arrow-sub-menu"))}));var e=document.querySelector(".top-social-menu__hamburger");e?e.addEventListener("click",(function(){var e=document.querySelector(".top-widget"),t=document.querySelector(".main-header"),o=document.querySelector(".main-header__container"),n=document.querySelector(".main-menu"),r=document.querySelector(".top-social-menu__hamburger-open"),c=document.querySelector(".top-social-menu__hamburger-close");document.body.classList.remove("body-overflow"),r&&c&&("none"!==r.style.display?(r.style.display="none",c.style.display="block"):(r.style.display="block",c.style.display="none")),e&&t&&o&&n?(e.classList.toggle("top-widget-hidden"),t.classList.toggle("main-header-mb-height-adjusted"),o.classList.toggle("main-header-mb-height-adjusted"),n.classList.toggle("main-menu-mb-height")):console.error("Uno o más elementos necesarios no se encontraron.");var s=n,l=document.querySelector(".blurry-overlap");s?(s.classList.toggle("active"),l.classList.toggle("active"),document.body.classList.toggle("mb-body-overflow")):console.error("El menú multinivel no se encontró.")})):console.error("El botón de hamburguesa no se encontró."),document.querySelectorAll(".main-menu__mb-back").forEach((function(e){e.addEventListener("click",(function(){var t=e.closest(".main-menu__sub-menu-first-level");t?t.classList.remove("active"):console.error("El elemento de retorno no se encuentra dentro de un submenú.")}))})),document.querySelectorAll(".push-menu__li").forEach((function(e){var t=e.querySelector(".push-menu__anchor"),o=e.querySelector(".push-menu__sub-menu-container");t&&o&&(t.classList.add("arrow-sub-menu"),t.addEventListener("click",(function(e){e.preventDefault()})))})),document.querySelectorAll(".push-menu__anchor").forEach((function(e){e.addEventListener("click",(function(t){if(!e.textContent.trim().toLowerCase().includes("all"))if(t.preventDefault(),window.innerWidth>=1280)t.preventDefault();else{var o=e.nextElementSibling;if(o&&o.classList.contains("push-menu__sub-menu-container")){o.classList.toggle("active"),o.scrollIntoView();var n=e.closest(".push-menu");n&&(n.style.top="-40px"===n.style.top?"0px":"-40px")}}}))})),document.querySelectorAll(".main-menu__mb-back-push").forEach((function(e){e.addEventListener("click",(function(){var t=e.closest(".push-menu__sub-menu-container");if(t){t.classList.remove("active");var o=e.closest(".push-menu");o&&(o.style.top="0px")}}))}));var t=document.querySelector(".blurry-overlap");t?t.addEventListener("click",(function(){var e=document.querySelector(".top-social-menu__hamburger-open"),o=document.querySelector(".top-social-menu__hamburger-close");e&&o&&(e.style.display="block",o.style.display="none"),document.body.classList.remove("mb-body-overflow"),document.body.classList.remove("body-overflow");var n=document.querySelector(".main-menu");n&&(n.classList.remove("active"),n.classList.toggle("main-menu-mb-height")),t.classList.toggle("active");var r=document.querySelector(".main-header");r&&r.classList.toggle("main-header-mb-height-adjusted");var c=document.querySelector(".main-header__container");c&&c.classList.toggle("main-header-mb-height-adjusted");var s=document.querySelector(".top-widget");s&&s.classList.toggle("top-widget-hidden")})):console.error("El elemento .blurry-overlap no se encontró.");var o=document.querySelector(".open-top-search"),n=document.querySelector(".close-top-search"),r=document.querySelector(".top-nav__search");o&&r?o.addEventListener("click",(function(){r.classList.toggle("active")})):console.error("El botón para abrir la búsqueda o el contenedor de búsqueda no se encontraron."),n&&r?n.addEventListener("click",(function(){r.classList.remove("active")})):console.error("El botón para cerrar la búsqueda o el contenedor de búsqueda no se encontraron.")}},function(e,t,o){o.r(t);t.default=function(){document.addEventListener("DOMContentLoaded",(function(){if(document.querySelector(".mid-size-slider"))new Swiper(".mid-size-slider",{direction:"horizontal",loop:!1,allowThresholdMove:!0,slidesPerView:"auto",spaceBetween:7,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},breakpoints:{320:{},481:{},640:{},768:{},960:{},1024:{},1200:{},1440:{},1600:{},1900:{}}});var e=document.querySelector(".mid-size-slider-section");e&&(e.style.display="block")}))}}],t={};function o(n){var r=t[n];if(void 0!==r)return r.exports;var c=t[n]={exports:{}};return e[n](c,c.exports,o),c.exports}o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};!function(){o.r(n);var e=o(1),t=o(2);$=jQuery.noConflict(),(0,e.default)(),(0,t.default)()}()}();
//# sourceMappingURL=theme-scripts.js.map