// global. currently active menu item 
var current_item = 0;
var services_item = 0;
// few settings
var section_hide_time = 1300;
var section_show_time = 1300;

// jQuery stuff
jQuery(document).ready(function($) {

	// Switch section
	$('a:not(.notaDiv)', '.mainmenu').click(function () {

		if (!$(this).hasClass('.active')) {
			current_item = this;
			// close all visible divs with the class of .section
			$('.section:visible').fadeOut(section_hide_time, function () {
				$('a:not(.notaDiv)', '.mainmenu').removeClass('active');
				$(current_item).addClass('active');
				var new_section = $($(current_item).attr('href'));
				new_section.fadeIn(section_show_time);
			});
		}

		return false;
	});


	$("a:not(.notaDiv)", '.selection').click(function () {
		if (!$(this).hasClass('active')) {
			services_item = this;
			// close all visible divs with the class of .section
			$('.part:visible').fadeOut(section_hide_time, function () {
				$('a:not(.notaDiv)', '.selection').removeClass('active');
				$(services_item).addClass('active');
				var new_part = $($(services_item).attr('href'));
				new_part.fadeIn(section_show_time);
			});
		}
		return false;
	});


	$(window).scroll(function () {
		if (($(".header.fixed").length > 0)) {
			if (($(this).scrollTop() > 0) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
			} else {
				$("body").removeClass("fixed-header-on");
			}
		}
		;
	});

	$(window).load(function () {
		if (($(".header.fixed").length > 0)) {
			if (($(this).scrollTop() > 0) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
			} else {
				$("body").removeClass("fixed-header-on");
			}
		}
		;
	});



	// Isotope filters
	//-----------------------------------------------
	if ($('.isotope-container').length>0) {
		$(window).load(function() {
			$('.isotope-container').fadeIn();
			var $container = $('.isotope-container').isotope({
				itemSelector: '.isotope-item',
				layoutMode: 'masonry',
				transitionDuration: '0.7s',
				filter: "*"
			});
			// filter items on button click
			$('.filters').on( 'click', 'ul.nav li a', function() {
				var filterValue = $(this).attr('data-filter');
				$(".filters").find("li.active").removeClass("active");
				$(this).parent().addClass("active");
				$container.isotope({ filter: filterValue });
				return false;
			});
		});
	};

	//Modal
	//-----------------------------------------------
	if($(".modal").length>0) {
		$(".modal").each(function() {
			$(".modal").prependTo( "body" );
		});
	}

});