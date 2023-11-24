;
import mainSlider from './internal-modules/mainSlider';
import menuMultiNivel from './core-modules/menuMultiNivel';
import midSizeSlider from './internal-modules/midSizeSlider';
import topSportbooks from './internal-modules/topSportbooks';
import sportBettingSolutiones from './internal-modules/sportBettingSolutiones';

(()=>{
	// To avoid conflicts with jQuery versions between WordPress and its plugins 
	$ = jQuery.noConflict() 	
	menuMultiNivel(); 
	mainSlider();
	midSizeSlider(); 
	topSportbooks();
	sportBettingSolutiones();
})();
