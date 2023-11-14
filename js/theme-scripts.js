;
console.log('Hello WordPress');
import {module1} from './components/module1';
import {module2} from './components/module2';
import menuMultiNivel from './core-modules/menuMultiNivel';
(()=>{
	// To avoid conflicts with jQuery versions between WordPress and its plugins
	$ = jQuery.noConflict() 
	module1();
	module2();
	menuMultiNivel();
})();
