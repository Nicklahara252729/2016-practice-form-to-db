$(window).scroll(function(){
	var wScroll=$(this).scrollTop();
	$('#menu').css({
		'transform':'translate(0px, '+ wScroll /1 +'%)'
	});
});
