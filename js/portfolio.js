(function($, Drupal, window, document, undefined) {
	$(document).ready(function() {
		//register events
		var nav_ul = $('#cd-nav ul');
		var nav_button = $('#nav-toggle');
		$(document).click(function() {
			if(nav_ul.hasClass('is-visible')) {
				nav_ul.removeClass('is-visible');
				nav_button.removeClass('open');
			}
		});
		$('#nav-toggle').click(function(e) {
			if(!nav_ul.hasClass('is-visible')) {
				nav_ul.addClass('is-visible');
				nav_button.addClass('open');
				e.stopPropagation();
				return false;
			}
		});
	});

	//https://www.drupal.org/node/2154099#comment-9985241
	//Colorbox configuration
	$.colorbox.settings.onLoad = function() {
		colorboxResize();
	}
	//Customize colorbox dimensions
	var colorboxResize = function(resize) {
		var width = "100%";
		var height = "100%";
		$.colorbox.settings.height = height;
		$.colorbox.settings.width = width;

		//If window is resized while lightbox open
		if(resize) {
			$.colorbox.resize({
				'height': height,
				'width': width
			});
		}
	}

	//In case of window being resized
	$(window).resize(function() {
		colorboxResize(true);
	});

})(jQuery, Drupal, this, this.document);