jQuery(document).ready(function() {
	// on scroll effects
	$(window).scroll(function(){
		$(".navscroll").toggleClass('scrolled', $(this).scrollTop() > 100);
	});

	// standard parallax
	$('.parallax-window').parallax({imageSrc: 'images/Parallax-Purple.jpg'
    });


	// carousel
	$('#carousel-clients').on('slide.bs.carousel', function (e) {

	    /*
	        CC 2.0 License Iatek LLC 2018
	        Attribution required
	    */
	    var $e = $(e.relatedTarget);
	    var idx = $e.index();
	    var itemsPerSlide = 5;
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

// background video player
function deferVideo() {   
  $("video source").each(function() {
    var sourceFile = $(this).attr("data-src");
    $(this).attr("src", sourceFile);
    var video = this.parentElement;
    video.load();video.play();
  });
}
window.onload = deferVideo;