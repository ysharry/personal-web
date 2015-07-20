var main = function(){
	$('#phone').click(function(){
		$('.number').fadeIn(400);
	});

	$('#email').click(function(){
		$('.email').fadeIn(400);
	});

	$(document).click(function(event){
		console.log(event.target.tagName);
		if(event.target.className != "number" && 
		   event.target.id !="phone" &&
		   event.target.tagName != "P") {
			$('.number').fadeOut(400);
		}
		if(event.target.className != "email" && 
		   event.target.id !="email" &&
		   event.target.tagName != "P") {
			$('.email').fadeOut(400);
		}
	});


	$('.facebook').mouseenter(function(){
		$('#fbfilter').show();
	});
	$('.facebook').mouseleave(function(){
		$('#fbfilter').hide();
	});

	$('.linkedin').mouseenter(function(){
		$('#lkfilter').show();
	});
	$('.linkedin').mouseleave(function(){
		$('#lkfilter').hide();
	});

	$('.skype').mouseenter(function(){
		$('#skfilter').show();
	});
	$('.skype').mouseleave(function(){
		$('#skfilter').hide();
	});

	$('.google').mouseenter(function(){
		$('#ggfilter').show();
	});
	$('.google').mouseleave(function(){
		$('#ggfilter').hide();
	});

}

$(document).ready(main);