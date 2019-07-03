$(function(){
	$('#modal-form').click(function(){
		$('body').css('position', 'relative');
		$('body').append('<div class="form-cover"><form class="modal-form" method="post"><p class="modal-form-heading">Заказать звонок</p><p class="modal-form-name">Ф.И.О.: <input name="name" type="text"></p><p class="modal-form-phone">Телефон: <input name="phone" type="text"></p><input id="modal-form-send" type="submit" value="Отправить"></form></div>');
		$('.form-cover form').animate({
			'margin-top' : '100px',
		});

		$('#modal-form-send').on('click', function(e){
			e.preventDefault();

			// console.log('sss');
			$.ajax({
				type: 'POST',
				url: 'application/core/lib/Mail.php',
				data: {
					'name' : $('.modal-form-name input').val(),
					'phone' : $('.modal-form-phone input').val(),
				},
				success: function(ans){
					console.log(ans);
				}
			});
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