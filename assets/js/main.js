/* Author: Jonathan Rivera

*/

jQuery(document).ready(function () {

  //Custom Interval for the Carousel
   jQuery('.carousel').carousel({
	  interval: 3000
	})
	
	jQuery('a.floor-plan-img').colorbox({ opacity:0.5 , rel:'group1',maxWidth: '90%',
		maxHeight: '90%' });
	
});




