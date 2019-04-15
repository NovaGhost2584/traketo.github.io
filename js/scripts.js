// JavaScript Document
$(window).scroll(function(){
	$(".navscroll").toggleClass('scrolled', $(this).scrollTop() > 800);
});