$(function(){
	$('.gallery-img img').click(function(){
		var src = $(this).attr('src');
		$('body').css('position', 'relative');
		$('body').append('<div class="gallery-modal-bg"><div class="gallery-modal-img"><img src="' + src +'"></div></div>');
		var imgHeight = $('.gallery-modal-img').height();
		$('.gallery-modal-bg').css('height', 100 + '%');	
	});

	$('body').click(function(e){
		if(e.target == $('.gallery-modal-bg')[0]){
			$('.gallery-modal-bg').remove();
		}	
	});
});