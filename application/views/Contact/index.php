<?= $header ?>
<main>
	<div class="page-heading">
		<div class="container">
			<h3>Контакты</h3>
		</div>
	</div>
	<div class="contact-section container">
		<div class="row">
			<div class="contact-info col-xlg-5 col-lg-5">
				<p class="adress">
					<span>Адрес:</span>
					<span>160019, г.Шымкент, Аль-Фарабийский район, улица Ахмет Байтурсынова, здание 88 «Б»</span>
				</p>
				<p class="phone">
					<span>Телефон:</span>
					<span>+7 (7252) 27-00-40</span>
				</p>
				<p class="e-mail">
					<span>E-mail адрес:</span>
					<span>expertgroup-m@mail.ru</span>
				</p>
			</div>
			<div class="contact-us col-xlg-7 col-lg-7">
				<form class="contact-form" action="">
					<div>
						<input type="text" name="name" placeholder="Ф.И.О.">
						<input type="text" name="email" placeholder="E-mail">
						<input type="text" name="question" placeholder="3 + 4 = ?">
						<input type="submit" value="Отправить сообщение">
					</div>
					<div>
						<textarea name="message-text" placeholder="Сообщение..."></textarea>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="contact-map">
		<iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A1f11c8508c91c9967db90dce4a1c466432236ae7b2f801ed6e4435914e5f5f86&amp;source=constructor" height="400" frameborder="0"></iframe>
	</div>
</main>
<?= $footer ?>