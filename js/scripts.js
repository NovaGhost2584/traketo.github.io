// on scroll effects
$(window).scroll(function(){
	$(".navscroll").toggleClass('scrolled', $(this).scrollTop() > 100);
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


// media queries
if (matchMedia) {
	const mq = window.matchMedia("(max-width: 575px)");
	mq.addListener(WidthChange);
	WidthChange(mq);
} else {
	// do nothing
}


// media query change
function WidthChange(mq) {
	if (mq.matches) {	
		var images = document.querySelectorAll('.parallax-green');
		new simpleParallax(images, {
		scale: 1
		}); 
	} else {			
		var images = document.querySelectorAll('.parallax-green');
		new simpleParallax(images, {
		scale: 1.5,
		delay: 0, 
		orientation: 'down'
		}); 
	}
}


// standard parallax
$('.parallax-window').parallax({imageSrc: 'images/Parallax-Purple.jpg'});



// client carousel
$('#clientCarousel').carousel({
  interval: 5000
})

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
			next = $(this).siblings(':first');
		}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});