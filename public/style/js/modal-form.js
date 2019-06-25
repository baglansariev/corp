$(function(){
	$('#modal-form').click(function(){
		$('body').css('position', 'relative');
		$('body').append('<div class="form-cover"><form action="" method="post"><p class="modal-form-heading">Заказать звонок</p><p class="modal-form-name">Ф.И.О.: <input name="name" type="text"></p><p class="modal-form-phone">Телефон: <input name="phone" type="text"></p><input type="submit" value="Отправить"></form></div>');
		$('.form-cover form').animate({
			'margin-top' : '100px',
		});
	});
	$('body').click(function(e){
		if(e.target == $('.form-cover')[0]){
			$('.form-cover form').animate({
			'margin-top' : '-200px',
		});
			setTimeout(function(){
				$('.form-cover').remove();
			}, 450);
			
		}
	});
});