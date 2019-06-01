$(function(){
	// Main Slider
	var sliderWidth = 100;
	var sliderViewportChildCount = $('.slider-viewport').children().length;

	console.log(sliderViewportChildCount);
	$('.slider-viewport').width(sliderViewportChildCount * sliderWidth + 'vw');








	// intro-block HOVER EFFECT
	$('.intro-cover').width($('.intro-block img').width());
	$('.intro-cover').height($('.intro-block img').height());

	$($('.intro-block')[0]).on('mouseover', function(){
		$($('.intro-cover')[0]).css('top', '15px');
		$($('.intro-label')[0]).css('bottom', '-70px');
	});
	$($('.intro-block')[1]).on('mouseover', function(){
		$($('.intro-cover')[1]).css('top', '15px');
		$($('.intro-label')[1]).css('bottom', '-70px');
	});
	$($('.intro-block')[2]).on('mouseover', function(){
		$($('.intro-cover')[2]).css('top', '15px');
		$($('.intro-label')[2]).css('bottom', '-70px');
	});

	$($('.intro-block')[0]).on('mouseleave', function(){
		$($('.intro-cover')[0]).css('top', '-100%');
		$($('.intro-label')[0]).css('bottom', '20px');
	});
	$($('.intro-block')[1]).on('mouseleave', function(){
		$($('.intro-cover')[1]).css('top', '-100%');
		$($('.intro-label')[1]).css('bottom', '20px');
	});
	$($('.intro-block')[2]).on('mouseleave', function(){
		$($('.intro-cover')[2]).css('top', '-100%');
		$($('.intro-label')[2]).css('bottom', '20px');
	});

	
});
