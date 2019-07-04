$(function(){
	$('#modal-form').click(function(){
		$('body').css('position', 'relative');
		$('body').append('<div class="form-cover"><form class="modal-form" method="post"><p class="modal-form-heading">Заказать звонок</p><p class="modal-form-name">Ф.И.О.: <input name="name" type="text" required></p><p class="modal-form-phone">Телефон: <input name="phone" type="text" required></p><input id="modal-form-send" type="submit" value="Отправить"></form></div>');
		$('.form-cover form').animate({
			'margin-top' : '100px',
		});

		$('.modal-form-phone input').on('input', function(){
			var phoneVal = $('.modal-form-phone input').val();
			for(var i = 0; i < phoneVal.length; i++){
				if(phoneVal.charCodeAt(i) < 48 || phoneVal.charCodeAt(i) > 57){
					$('.modal-form-phone input').val('');
				}
			}
		});
		$('#modal-form-send').on('click', function(e){
			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'application/core/lib/Mail.php',
				data: {
					'name' : $('.modal-form-name input').val(),
					'phone' : $('.modal-form-phone input').val(),
				},
				success: function(ans){
					console.log(ans);
					$('.modal-form-heading').append('<br><i style="color: green; font-size: 13px">Сообщение отправлено</i>');
					setTimeout(function(){
						$('.form-cover form').animate({
							'margin-top' : '-200px',
						});
						setTimeout(function(){
							$('.form-cover').remove();
						}, 450);
					}, 1500);
				},
				error: function(){
					$('.modal-form-heading').append('<br><i style="color: red; font-size: 13px">Произошла ошибка, попробуйте позже</i>');
				},
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