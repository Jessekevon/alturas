/**
 * Modal.js
 *
 * Contains code for modal initialization
 *
 */
( function( $ ) {
	$('button').click(function(e) {
	  $('.overlay').addClass('active');
	  e.preventDefault();
	});

	$('img.close').click(function(e) {
	  $('.overlay').removeClass('active');
	  e.preventDefault();
	});
} )( jQuery );
