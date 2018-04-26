(function($){
	$(document).ready(function() {	



		$('.carousel-inner .carousel-item:first-child').addClass('active');
		
  		// parallax-bg
        var documentEl = $(document),
            parallaxBg = $('div.parallax-bg');
        
        documentEl.on('scroll', function() {
            var currScrollPos = documentEl.scrollTop();
            parallaxBg.css('background-position', '0 ' + -currScrollPos/4 + 'px');
        });
		

        // mixitup
		mixitup('.portfolio-boxes');
		 wow = new WOW(
	          {
	          boxClass:     'wow',      // default
	          animateClass: 'animated', // default
	          offset:       0,          // default
	          mobile:       true,       // default
	          live:         true        // default
	        }
	        )
	        wow.init(); 	      
	      $('html').smoothScroll(500);	
		  
		  
		  $('#carouselExample').on('slide.bs.carousel', function (e) {

				var $e = $(e.relatedTarget);
				var idx = $e.index();
				var itemsPerSlide = 4;
				var totalItems = $('.carousel-item').length;
				
				if (idx >= totalItems-(itemsPerSlide-1)) {
					var it = itemsPerSlide - (totalItems - idx);
					for (var i=0; i<it; i++) {
						// append slides to end
						if (e.direction=="left") {
							$('.carousel-item').eq(i).appendTo('.carousel-inner');
						}
						else {
							$('.carousel-item').eq(0).appendTo('.carousel-inner');
						}
					}
				}
			});
					
		
	});
})(jQuery);