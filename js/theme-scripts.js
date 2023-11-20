;
import menuMultiNivel from './core-modules/menuMultiNivel';
import midSizeSlider from './internal-modules/midSizeSlider';
(()=>{
	// To avoid conflicts with jQuery versions between WordPress and its plugins 
	$ = jQuery.noConflict() 
	menuMultiNivel(); 
	midSizeSlider(); 
})();
