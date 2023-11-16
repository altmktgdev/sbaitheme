;
console.log('Hello WordPress');
import menuMultiNivel from './core-modules/menuMultiNivel';
(()=>{
	// To avoid conflicts with jQuery versions between WordPress and its plugins
	$ = jQuery.noConflict() 
	menuMultiNivel(); 
})();
