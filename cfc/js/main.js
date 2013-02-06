$(document).ready(function() {


/* Slideshow */

$('.slideshow li').addClass( 'off' ).filter(':lt(4)').removeClass( 'off' );

$(".arrow.forward").click(function() {
	$('.slideshow li').addClass( 'off' ).filter(':gt(3)').removeClass( 'off' );
	$('.arrow').removeClass( 'off' );
	$('.arrow.forward').addClass( 'off' );
});
$(".arrow.back").click(function() {
	$('.slideshow li').addClass( 'off' ).filter(':lt(4)').removeClass( 'off' );
	$('.arrow').removeClass( 'off' );
	$('.arrow.back').addClass( 'off' );
});


});