/* scrolling START */

jQuery(window).load(function($) {
	jQuery('.main-menu, .vc_altos_button, .mobile-menu-wrapper').localScroll({
		offset: 0
	});
});	




jQuery(window).load(function($) {	
	var urls_from_menu = jQuery('.main-menu li');
	var page_sections = jQuery('.onepager_section_class');
	page_sections.waypoint({
		handler: function(direction) {
		var pos = jQuery.inArray(this,page_sections);
		var active_section = page_sections.eq(direction === "up" ? Math.max(0,pos-1) : pos);
		var active_link = jQuery('.main-menu li a[href$="#' + active_section.attr("id") + '"]');
		urls_from_menu.removeClass("current_page_item");
		urls_from_menu.removeClass("current-menu-item");
		active_link.parent().addClass("current_page_item");
		active_link.parent().addClass("current-menu-item");
	},
	offset: '0'
	});
});



/* menu effect START */
 jQuery(document).ready(function($){
	var menustate = false;
	$(".menu-icons-inside").click(function() {
		if (menustate == false) {
			jQuery(".main-menu").addClass("showmenu");
			jQuery(".menu-icon.menu-icon-standard").addClass("opened");
			menustate = true;
			/*jQuery(".menu-icon-open").fadeOut();
			jQuery(".menu-icon-close").fadeIn();*/
		}
		else {
			jQuery(".main-menu").removeClass("showmenu");
			jQuery(".menu-icon.menu-icon-standard").removeClass("opened");
			menustate = false;
			/*jQuery(".menu-icon-open").fadeIn();
			jQuery(".menu-icon-close").fadeOut();*/
		}
  	});
});
/* menu effect END */



if (jQuery("#trigger-overlay").length > 0) {
	(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( '.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
})();
}


if (jQuery("#trigger-overlay-sticky").length > 0) {
	(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay-sticky' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( '.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
})();
}


jQuery(document).ready(function () {
	jQuery(document).on("scroll", function(){
		if
      (jQuery(document).scrollTop() > 120){
		  jQuery(".header-wrapper.header2").addClass("shown");
		}
		else
		{
			jQuery(".header-wrapper.header2").removeClass("shown");
			
		}
	});
});

/* scrolling END */


/*	Testimonials START */
if (jQuery(".owl-carousel.testimonials-wrapper").length > 0) {
jQuery(document).ready(function() {
  var owl = jQuery(".owl-carousel.testimonials-wrapper");
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 1],
        [1000, 1],
        [1200, 1],
        [1400, 1],
        [1600, 1]
      ],
      navigation : false,
      pagination : true,
      autoPlay: 5000,
      stopOnHover: true
  });
});
}

/*	Testimonials END */


/* Services */

function showServiceItem(serviceitem, wrap) {
  	jQuery("#"+wrap+" .list-service-items").slideUp("slow", function(){
			jQuery("#"+wrap+" ."+serviceitem).slideDown("slow");
    	
  	})
	return false;
}
function backToServices(serviceitem, wrap) {
  	jQuery("#"+wrap+" ."+serviceitem).slideUp("slow");
    jQuery("#"+wrap+" .list-service-items").delay(1000).slideDown("slow");
	return false;
}


/*
jQuery(document).ready(function () {
	jQuery(document).on("scroll", function(){
		if
      (jQuery(document).scrollTop() > 100){
		  jQuery(".header-wrapper").addClass("shrink");
		}
		else
		{
			jQuery(".header-wrapper").removeClass("shrink");
			
		}
	});
});
*/

/*	Menu START */
jQuery(function(){
	"use strict";
	// main navigation init
	jQuery('.main-menu .sf-menu').superfish({
		delay:	300,	// one second delay on mouseout 
		animation:   {opacity:'show',height:'show'}, // fade-in and slide-down animation
		speed:       'fast',  // faster animation speed 
		autoArrows:  true,   // generation of arrow mark-up (for submenu) 
		dropShadows: false
	});
});
 /*	Menu END */
 


(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.on('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


/*	Footer and Header START */
jQuery(document).ready(function () {
	if (jQuery("#footer").length > 0) {
 		var offsetHeight = document.getElementById('footer').offsetHeight;
		jQuery(".container-wrapper").css("padding-bottom", offsetHeight+"px");
		
		
	}
	var offsetHeightHeader = document.getElementById('header').offsetHeight;
	jQuery(".first-page-item").css("padding-top", offsetHeightHeader+"px");
	jQuery(".mobile-menu-wrapper").css("top", offsetHeightHeader+"px");
	
});

jQuery(window).smartresize(function(){
	"use strict";
	if (jQuery("#footer").length > 0) {
  		var offsetHeight = document.getElementById('footer').offsetHeight;
		jQuery(".container-wrapper").css("padding-bottom", offsetHeight+"px");
	}
	var offsetHeightHeader = document.getElementById('header').offsetHeight;
	jQuery(".first-page-item").css("padding-top", offsetHeightHeader+"px");
	jQuery(".mobile-menu-wrapper").css("top", offsetHeightHeader+"px");
	
});

jQuery(window).load(function () {
	if (jQuery("#footer").length > 0) {
 		var offsetHeight = document.getElementById('footer').offsetHeight;
		jQuery(".container-wrapper").css("padding-bottom", offsetHeight+"px");
	}
	var offsetHeightHeader = document.getElementById('header').offsetHeight;
	jQuery(".first-page-item").css("padding-top", offsetHeightHeader+"px");
	jQuery(".mobile-menu-wrapper").css("top", offsetHeightHeader+"px");
});
/*	Footer and HEader END */

/* Pretty photo START */	
	jQuery(window).load(function(){
		if (jQuery("a[data-gal^='prettyPhoto']").length > 0) {
			jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		}
	});
/* Pretty photo END */	

/*	Page load/switch transition  START */
	jQuery(document).ready(function($) {
		$(".animsition").animsition({
		inClass               :   'fade-in',
		outClass              :   'fade-out',
		inDuration            :    1500,
		outDuration           :    800,
		linkElement           :   '.animsition-link',
		loading               :    true,
		loadingParentElement  :   'body', //animsition wrapper element
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		overlay               :   false,

		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
		});
	});
/*	Page load/switch transition  END */

/* Mobile menu START */
jQuery(document).ready(function($){
	var slide = false;
	$(".menu-icon-mobile").on( "click", function() {
	
		if (slide == false) {
			$(".mobile-menu-wrapper").slideDown("slow");
			jQuery(".menu-icon.menu-icon-mobile").addClass("opened");
			slide = true;
		}
		else {
			$(".mobile-menu-wrapper").slideUp("slow");
			jQuery(".menu-icon.menu-icon-mobile").removeClass("opened");
			slide = false;
		}
  	});
  	$(".mobile-menu-wrapper a").on( "click", function() {
 		if (slide == false) {
			$(".mobile-menu-wrapper").slideDown("slow");
			jQuery(".menu-icon.menu-icon-mobile").addClass("opened");
			slide = true;
		}
		else {
			$(".mobile-menu-wrapper").slideUp("slow");
			jQuery(".menu-icon.menu-icon-mobile").removeClass("opened");
			slide = false;
		}
  	});
  	
  	
  	
});
/* Mobile menu END */




jQuery(document).ready(function () {
    jQuery('.scroll_to_top').on( "click", function() {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 800);
        return false;
    });

});


function goBack() {
    window.history.back();
}

