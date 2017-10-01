$(document).ready(function() {
	var owl = $(".owl-carousel");
	owl.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		dotsEach: true,
		dotsData: true
	});
	$('.play').on('click',function(){
		owl.trigger('play.owl.autoplay',[1000]);
	});
	$('.stop').on('click',function(){
		owl.trigger('stop.owl.autoplay');
	});
});