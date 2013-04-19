$(document).ready(function() {


/* Homepage slideshow */

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




/* People tabs */

$('.people-details-nav a').removeClass( 'on' ).filter(1).addClass( 'on' );

$(".people-details-nav a").click(function() {

	// change nav 'on' state
	$('.people-details-nav a').removeClass( 'on' );
	$(this).addClass( 'on' );

	// change panels 'on' state
	$('.people-tab').removeClass('on');
	$(this.hash).addClass('on');

});


});