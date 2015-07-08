( function( $ ) {

	$('.fade').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
	}),

	$('.fade1').slick({
	  dots: true,
	  arrows: false,
	  infinite: true,
	  speed: 1500,
	  autoplay: true,
	  fade: true,
	  autoplaySpeed: 3000,
	  cssEase: 'linear'
	}),

	$('.fade2').slick({
	  dots: true,
	  arrows: false,
	  infinite: true,
	  speed: 1500,
	  autoplay: true,
	  autoplaySpeed: 4000,
	  fade: true,
	  waitForAnimate: false,
	  cssEase: 'linear'
	});
	
} )( jQuery );
