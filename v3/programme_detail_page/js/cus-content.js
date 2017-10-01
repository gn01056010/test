$(document).ready(function() {
	// Default =================================
	$(".Content_body_1").addClass("S_open");
	$(".Content_body_1").slideDown();			

	$(".Content_body_2").addClass("S_close");
	$(".Content_body_2").css("display","none");
	$(".Content_body_3").addClass("S_close");
	$(".Content_body_3").css("display","none");
	
	$(".Content_body_4").addClass("S_open");
	$(".Content_body_4").slideDown();	
	
	$(".Content_header_1 > div > .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
	$(".Content_header_2 > div > .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
	$(".Content_header_3 > div > .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
	$(".Content_header_4 > div > .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
	// =========================================	
	
	$(".Content_header_1").click(function(){
		if($(".Content_body_1").hasClass("S_open")){
			$(".Content_body_1").removeClass("S_open");
			$(".Content_body_1").addClass("S_close");
			$(".Content_body_1").slideUp();
			$(".Content_header_1 > div > .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
		}else if($(".Content_body_1").hasClass("S_close")){
			$(".Content_body_1").removeClass("S_close");
			$(".Content_body_1").addClass("S_open");
			$(".Content_body_1").slideDown();
			$(".Content_header_1 > div > .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
		}				
	});
	
	$(".Content_header_2").click(function(){
		if($(".Content_body_2").hasClass("S_open")){
			$(".Content_body_2").removeClass("S_open");
			$(".Content_body_2").addClass("S_close");
			$(".Content_body_2").slideUp();
			$(".Content_header_2 > div > .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
		}else if($(".Content_body_2").hasClass("S_close")){
			$(".Content_body_2").removeClass("S_close");
			$(".Content_body_2").addClass("S_open");
			$(".Content_body_2").slideDown();
			$(".Content_header_2 > div > .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
		}				
	});

	$(".Content_header_3").click(function(){
		if($(".Content_body_3").hasClass("S_open")){
			$(".Content_body_3").removeClass("S_open");
			$(".Content_body_3").addClass("S_close");
			$(".Content_body_3").slideUp();
			$(".Content_header_3 > div > .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
		}else if($(".Content_body_3").hasClass("S_close")){
			$(".Content_body_3").removeClass("S_close");
			$(".Content_body_3").addClass("S_open");
			$(".Content_body_3").slideDown();
			$(".Content_header_3 > div > .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
		}				
	});	
	
	$(".Content_header_4").click(function(){
		if($(".Content_body_4").hasClass("S_open")){
			$(".Content_body_4").removeClass("S_open");
			$(".Content_body_4").addClass("S_close");
			$(".Content_body_4").slideUp();
			$(".Content_header_4 > div > .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
		}else if($(".Content_body_4").hasClass("S_close")){
			$(".Content_body_4").removeClass("S_close");
			$(".Content_body_4").addClass("S_open");
			$(".Content_body_4").slideDown();
			$(".Content_header_4 > div > .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
		}				
	});	
});	