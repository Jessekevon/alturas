/**
 * fade-in.js
 *
 * Contains code for Lazy Loading Fade In
 *
 */
( function( $ ) {
	// Add class after page load that adds an opacity change to allow images to fade in smoothly when the page is fully loaded
	$(window).load(function() {
	  $(".fadeIn").addClass("fadeIn-1s");
	});

} )( jQuery );
