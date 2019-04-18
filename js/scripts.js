// JavaScript Document
$(window).scroll(function(){
	$(".navscroll").toggleClass('scrolled', $(this).scrollTop() > 100);
});

function deferVideo() {

    //defer html5 video loading
  $("video source").each(function() {
    var sourceFile = $(this).attr("data-src");
    $(this).attr("src", sourceFile);
    var video = this.parentElement;
    video.load();
    // uncomment if video is not autoplay
    //video.play();
  });

}
window.onload = deferVideo;


var images = document.querySelectorAll('.thumbnail');
new simpleParallax(images, {
	delay: 0, 
	orientation: 'down', 
	scale: 1.5
}); 