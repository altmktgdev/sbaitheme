!function(){"use strict";var e=[,function(e,o,t){t.r(o),t.d(o,{module1:function(){return n}});var n=function(){console.log("Hello World Module 1")}},function(e,o,t){t.r(o),t.d(o,{module2:function(){return n}});var n=function(){console.log("Hello World Module 2")}},function(e,o,t){t.r(o);o.default=function(){document.querySelectorAll(".main-menu__li").forEach((function(e){var o=e.querySelector(".main-menu__anchor"),t=e.querySelector(".main-menu__sub-menu-first-level");t&&o&&(o.addEventListener("click",(function(e){e.preventDefault();var o=t.classList.contains("active");document.querySelectorAll(".main-menu__sub-menu-first-level").forEach((function(e){e.classList.remove("active")})),document.body.classList.remove("body-overflow"),o||(t.classList.add("active"),document.body.classList.add("body-overflow"))})),o.classList.add("arrow-sub-menu"))}));var e=document.querySelector(".top-social-menu__hamburger");e?e.addEventListener("click",(function(){var e=document.querySelector(".top-widget"),o=document.querySelector(".main-header"),t=document.querySelector(".main-header__container"),n=document.querySelector(".main-menu"),r=document.querySelector(".top-social-menu__hamburger-open"),c=document.querySelector(".top-social-menu__hamburger-close");document.body.classList.remove("body-overflow"),r&&c&&("none"!==r.style.display?(r.style.display="none",c.style.display="block"):(r.style.display="block",c.style.display="none")),e&&o&&t&&n?(e.classList.toggle("top-widget-hidden"),o.classList.toggle("main-header-mb-height-adjusted"),t.classList.toggle("main-header-mb-height-adjusted"),n.classList.toggle("main-menu-mb-height")):console.error("Uno o más elementos necesarios no se encontraron.");var l=n,s=document.querySelector(".blurry-overlap");l?(l.classList.toggle("active"),s.classList.toggle("active"),document.body.classList.toggle("mb-body-overflow")):console.error("El menú multinivel no se encontró.")})):console.error("El botón de hamburguesa no se encontró."),document.querySelectorAll(".main-menu__mb-back").forEach((function(e){e.addEventListener("click",(function(){var o=e.closest(".main-menu__sub-menu-first-level");o?o.classList.remove("active"):console.error("El elemento de retorno no se encuentra dentro de un submenú.")}))})),document.querySelectorAll(".push-menu__li").forEach((function(e){var o=e.querySelector(".push-menu__anchor");e.querySelector(".push-menu__sub-menu-container")&&o&&o.classList.add("arrow-sub-menu")})),document.querySelectorAll(".push-menu__anchor").forEach((function(e){e.addEventListener("click",(function(o){if(window.innerWidth>=1280)o.preventDefault();else{var t=e.nextElementSibling;if(t&&t.classList.contains("push-menu__sub-menu-container")){t.classList.toggle("active"),t.scrollIntoView();var n=e.closest(".push-menu");n&&(n.style.top="-40px"===n.style.top?"0px":"-40px")}}}))})),document.querySelectorAll(".main-menu__mb-back-push").forEach((function(e){e.addEventListener("click",(function(){var o=e.closest(".push-menu__sub-menu-container");if(o){o.classList.remove("active");var t=e.closest(".push-menu");t&&(t.style.top="0px")}}))}));var o=document.querySelector(".blurry-overlap");o?o.addEventListener("click",(function(){var e=document.querySelector(".top-social-menu__hamburger-open"),t=document.querySelector(".top-social-menu__hamburger-close");e&&t&&(e.style.display="block",t.style.display="none"),document.body.classList.remove("mb-body-overflow"),document.body.classList.remove("body-overflow");var n=document.querySelector(".main-menu");n&&(n.classList.remove("active"),n.classList.toggle("main-menu-mb-height")),o.classList.toggle("active");var r=document.querySelector(".main-header");r&&r.classList.toggle("main-header-mb-height-adjusted");var c=document.querySelector(".main-header__container");c&&c.classList.toggle("main-header-mb-height-adjusted");var l=document.querySelector(".top-widget");l&&l.classList.toggle("top-widget-hidden")})):console.error("El elemento .blurry-overlap no se encontró.");var t=document.querySelector(".open-top-search"),n=document.querySelector(".close-top-search"),r=document.querySelector(".top-nav__search");t&&r?t.addEventListener("click",(function(){r.classList.toggle("active")})):console.error("El botón para abrir la búsqueda o el contenedor de búsqueda no se encontraron."),n&&r?n.addEventListener("click",(function(){r.classList.remove("active")})):console.error("El botón para cerrar la búsqueda o el contenedor de búsqueda no se encontraron.")}}],o={};function t(n){var r=o[n];if(void 0!==r)return r.exports;var c=o[n]={exports:{}};return e[n](c,c.exports,t),c.exports}t.d=function(e,o){for(var n in o)t.o(o,n)&&!t.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:o[n]})},t.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};!function(){t.r(n);var e=t(1),o=t(2),r=t(3);console.log("Hello WordPress"),$=jQuery.noConflict(),(0,e.module1)(),(0,o.module2)(),(0,r.default)()}()}();
//# sourceMappingURL=theme-scripts.js.map