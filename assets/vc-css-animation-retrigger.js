( function( $ ) {

	'use strict';

	if ( 'function' !== typeof window.vcRetriggerCSSAnimation ) {
		window.vcRetriggerCSSAnimation = function( $context ) {
			$( window ).scroll( function( e ) {
				var windowBottom = $( window ).scrollTop() + $( window ).innerHeight();
				var windowTop    = $( window ).scrollTop();
				$( '.wpb_animate_when_almost_visible' ).each( function() {
					var $el = $( this );
					if ( ! $el.length ) {
						return;
					}
					var elTop    = $el.offset().top;
					var elBottom = $el.offset().top + $el.outerHeight();
					if ( ( windowBottom > elTop ) && ( windowTop < elBottom ) ) {
						if ( $el.hasClass( 'retriggered' ) ) {
							$el.addClass( 'wpb_start_animation animated' );
						}
					} else if ( $el.hasClass( 'wpb_start_animation' ) ) {
						$el.removeClass( 'wpb_start_animation animated' );
						$el.addClass( 'retriggered' );
					}
				} );
			} );
		};
	}

	$( document ).ready( function() {
		window.vcRetriggerCSSAnimation();
	} );

} ) ( jQuery );