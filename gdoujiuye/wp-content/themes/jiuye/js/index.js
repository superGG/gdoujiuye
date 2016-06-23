$(function(){
	$(".action-popup-login").click(function(){
		$(".cover").toggle();
	});
	$(".false").click(function(){
		$(".cover").toggle();
	});


	//傻逼ie
	if($("#banner_large").css("height") == "0px" || $("#banner_large").css("height") == "0"){

		$("#banner_large").css("height",$(window).height());
		$(".slide.fp-slide").css("height",$(window).height());
	}

});