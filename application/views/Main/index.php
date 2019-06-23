<?= $header ?>
<main>
	<div class="main-slider">
		<div class="slider-viewport" data-current="0">
			<div class="slider-image">
				<img src="/public/images/1.jpg" alt="">
				<div id="particles-js"></div>
				<div class="slider-text">
					<div>
						<h2 class="slider-text-heading">EXPERT GROUP-M</h2>
						<span>Добро пожаловать!</span>
					</div>
					<div class="slider-links">
						<a href="/about">О компании</a>
						<a href="/contact">Связаться</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="intro container">
		<div class="row">
			<?= $intro_blocks ?>
		</div>
	</div>
	<div class="services">
		<div class="container">
			<h4>Наши услуги</h4>
			<div class="row">
				<?= $services ?>
			</div>
		</div>
	</div>
	<div class="callback">
		<div class="container">
			<div class="callback-content">
				<div class="callback-text">
					<p class="callback-heading">
						Обратный звонок
					</p>
					<p class="callback-intro-text">
						 Если у Вас есть какие-либо вопросы по нашим услугам или Вам нужна консультация специалиста, Вы можете оставить нам свои контактны еданные мы Вам обязательно перезвоним
					</p>
				</div>
				<form action="">
					<div>
						<input name="full-name" type="text" placeholder="Ф.И.О.">
						<input name="phone" type="text" placeholder="Телефон">
					</div>
					<div>
						<input name="email" type="text" placeholder="E-mail">
						<input class="info-btn" type="submit" value="Отправить">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="latest-news container">
		<h4>Последние новости</h4>
		<div class="row">
			<?= $latest_news ?>
		</div>
	</div>
	<div class="clients">
		<div class="container">
			<div class="row">
				<?= $clients ?>
			</div>
		</div>
	</div>
	<div class="why-choose-us container">
		<h4>Почему выбирают нас</h4>
		<div class="row">
			<?= $why_we ?>
		</div>
	</div>
</main>
<?= $footer ?>