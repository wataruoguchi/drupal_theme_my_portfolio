(function($, Drupal, window, document, undefined) {
	Drupal.behaviors.navigationButton = {
		//register events for the navigation
		attach: function(context, settings) {
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
		}
	}

	Drupal.behaviors.colorboxResize = {
		attach: function(context, settings) {
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
		}
	}

	Drupal.behaviors.preventScrolling = {
		attach: function(context, settings) {
			//http://stackoverflow.com/Rsquestions/21528388/is-it-possible-to-have-colorbox-overlay-open-at-the-top-of-the-page-but-not-allo
			//Prevent scrolling when colorbox is opening
			$(document).bind('cbox_open', function() {
				$('html').css('overflow', 'hidden');
			}).bind('cbox_closed', function() {
				$('html').css('overflow', '');
			});
		}
	}
})(jQuery, Drupal, this, this.document);
