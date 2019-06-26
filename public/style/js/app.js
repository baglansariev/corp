$(function(){


	// // Main Slider - Turn on if there is slider images
	// var sliderWidth = 100;
	// var sliderTimer;
	// var sliderViewportChildCount = $('.slider-viewport').children().length;

	// $('.slider-viewport').width(sliderViewportChildCount * sliderWidth + 'vw');

	// sliderTimer=setInterval(nextSlide,5000);
 //    $('.fa-chevron-right').click(function(){
 //        clearInterval(sliderTimer);
 //        nextSlide();
 //        sliderTimer=setInterval(nextSlide,5000);
 //    });
 //    $('.fa-chevron-left').click(function(){
 //        clearInterval(sliderTimer);
 //        prevSlide();
 //        sliderTimer=setInterval(nextSlide,5000);
 //    });


 //    function nextSlide(){
	//     var currentSlide=parseInt($('.slider-viewport').data('current'));
	//     currentSlide++;
	//     if(currentSlide>=$('.slider-viewport').children().length){
	//         currentSlide=0;   
	//     }
	//     $('.slider-viewport').animate({left: -currentSlide*sliderWidth + 'vw'},1000).data('current',currentSlide);
	// }

	// function prevSlide(){
	//     var currentSlide=parseInt($('.slider-viewport').data('current'));
	//     currentSlide--;
	//     if(currentSlide<0)
	//     {
	//         currentSlide=$('.slider-viewport').children().length-1;   
	//     }
	//     $('.slider-viewport').animate({left: -currentSlide*sliderWidth + 'vw'},1000).data('current',currentSlide);
	// }



	// intro-block HOVER EFFECT
	$('.intro-cover').width($('.intro-block img').width());
	$('.intro-cover').height($('.intro-block img').height());

	$($('.intro-block')[0]).on('mouseover', function(){
		$($('.intro-cover')[0]).css('top', '0');
		$($('.intro-label')[0]).css('bottom', '-70px');
	});
	$($('.intro-block')[1]).on('mouseover', function(){
		$($('.intro-cover')[1]).css('top', '0');
		$($('.intro-label')[1]).css('bottom', '-70px');
	});
	$($('.intro-block')[2]).on('mouseover', function(){
		$($('.intro-cover')[2]).css('top', '0');
		$($('.intro-label')[2]).css('bottom', '-70px');
	});

	$($('.intro-block')[0]).on('mouseleave', function(){
		$($('.intro-cover')[0]).css('top', '-200%');
		$($('.intro-label')[0]).css('bottom', '20px');
	});
	$($('.intro-block')[1]).on('mouseleave', function(){
		$($('.intro-cover')[1]).css('top', '-200%');
		$($('.intro-label')[1]).css('bottom', '20px');
	});
	$($('.intro-block')[2]).on('mouseleave', function(){
		$($('.intro-cover')[2]).css('top', '-200%');
		$($('.intro-label')[2]).css('bottom', '20px');
	});


	//owl carousel setup
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{	
	            items:5
	        }
	    }
	});

	$('.fa-bars').click(function(){
		$('.menu ul').toggleClass('mobile-menu');
	});

	if($('.slider-image img') !== typeof 'undefined'){
		var imgHeight = $('.slider-image img').height();
		$('.slider-image').height(imgHeight);
	}
	
});
