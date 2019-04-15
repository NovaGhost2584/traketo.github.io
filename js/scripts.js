// JavaScript Document
$(window).scroll(function(){
	$(".navscroll").toggleClass('scrolled', $(this).scrollTop() > 850);
});


var images = document.querySelectorAll('.thumbnail');
new simpleParallax(images, {
	delay: 0, 
	orientation: 'down', 
	scale: 1.5, 
	overfow: true
}); 