/* global panadero_bakeryScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {

	// NAVIGATION CALLBACK FOR MAIN MENU
	var ww = jQuery(window).width();
	jQuery(document).ready(function() { 
		jQuery(".menu-section .nav li a").each(function() {
			if (jQuery(this).next().length > 0) {
				jQuery(this).addClass("parent");
			};
		})
		jQuery(".toggleMenu").click(function(e) { 
			e.preventDefault();
			jQuery(this).toggleClass("active");
			jQuery(".menu-section .nav").slideToggle('fast');
		});
		adjustMenu();
	})

	// navigation orientation resize callbak
	jQuery(window).bind('resize orientationchange', function() {
		ww = jQuery(window).width();
		adjustMenu();
	});

	var adjustMenu = function() {
		if (ww < 720) {
			jQuery(".toggleMenu").css("display", "block");
			if (!jQuery(".toggleMenu").hasClass("active")) {
				jQuery(".menu-section .nav").hide();
			} else {
				jQuery(".menu-section .nav").show();
			}
			jQuery(".menu-section .nav li").unbind('mouseenter mouseleave');
		} else {
			jQuery(".toggleMenu").css("display", "none");
			jQuery(".menu-section .nav").show();
			jQuery(".menu-section .nav li").removeClass("hover");
			jQuery(".menu-section .nav li a").unbind('click');
			jQuery(".menu-section .nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
				jQuery(this).toggleClass('hover');
			});
		}
	}
	
})( jQuery );
